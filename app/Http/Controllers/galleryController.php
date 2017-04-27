<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Session;
use Image;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Store all the pages in a variable
        $gallery = Gallery::all();

        //return a view with all the list of gallerys stored
        return view('mains.listgallery')->withGallery($gallery);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mains.addgallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                                //validate data entry
        $this->validate($request, array(
            'title' => 'required|max:255',
            'img_scr'  => 'required'
            ));

        //Store into the database
        $gallery = new Gallery; //create a new object of the Model you created. Also remember to include the class - use App\gallery
        $gallery -> title = $request -> title; //assign the title

            if($request->hasFile('img_scr')){ //since it is optional, check to see if image is added
            $image  = $request->file('img_scr'); //request the image
            $filename = time().'.'.$image->getClientOriginalExtension(); //use the timestamp to make image name unique. Concat the time stamp to the image scr name and keep the original extension if you want or encode to a specific format
            $location = public_path('images/cabal/gallery/'.$filename); //store the image in the folder created in the public folder

            Image::make($image)->resize(800, 400)->save($location); //Make the image with the help of the image intervention library added to the project thru composer from image.intervention.io

            $gallery -> img_scr = $filename; //save filename to DB
            }


        $gallery -> save(); //save to the database

        Session::flash('success','New gallery Image successfully saved'); //import use Session;

        //redirect user to another page that will show the newly added gallery
        //the show function is given the newly added id as a parameter.
        return redirect()->route('gallerys.show', $gallery->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = Gallery::find($id);
        return view('mains.showgallery')->withGallery($gallery);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //retrive post from DB and save to a variable
        $gallery = Gallery::find($id);
        //return the view and pass in the variable already created
        return view('mains.editgallery')->withGallery($gallery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                                //validate data entry
        $this->validate($request, array(
            'title' => 'required|max:255',
            'img_src'  => 'required'
            ));

        //Store into the database
        $gallery = new Gallery; //create a new object of the Model you created. Also remember to include the class - use App\gallery
        $gallery -> title = $request -> title; //assign the title
        $gallery -> img_src = $request -> img_src; //assign the body


        $gallery -> save(); //save to the database

        Session::flash('success','New gallery successfully saved'); //import use Session;

        //redirect user to another page that will show the newly added gallery
        //the show function is given the newly added id as a parameter.
        return redirect()->route('mains.show', $gallery->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                //find the item to delete
        $gallery = Gallery::find($id);

        $gallery->delete();

        Session::flash('success','Image successfully deleted'); //import use Session;

        return redirect()->route('gallerys.index');
    }
}
