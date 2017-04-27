<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use Session;
use Image;
use DB;

class slideController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = Slide::all();
        //$slide = DB::table('slides')->where('status', '=', 1)->get();
        return view('mains.listslides')->withSlide($slide);
    }


    public function status()
    {

        //$slide = Slide::all();
       // $slide = Slide::table('slide')->where('status', 1)->get();

        //return a view with all the list of slides stored
        //return view('mains.listslides')->withSlide($slide);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mains.addslides');
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
            'img_scr'  => 'required'
            ));

        //Store into the database
    $slide = new Slide; //create a new object of the Model you created. 

    if($request->hasFile('img_scr')){ //since it is optional, check to see if image is added
    $image  = $request->file('img_scr'); //request the image
    $filename = time().'.'.$image->getClientOriginalExtension(); //use the timestamp to make image name unique. Concat the time stamp to the image scr name and keep the original extension if you want or encode to a specific format
    $location = public_path('images/cabal/slides/'.$filename); //store the image in the folder created in the public folder

    Image::make($image)->resize(800, 400)->save($location); //Make the image with the help of the image intervention library added to the project thru composer from image.intervention.io

    $slide -> img_scr = $filename; //save filename to DB
    }


        $slide -> save(); //save to the database

        Session::flash('success','New slide successfully saved'); //import use Session;

        //redirect user to another page that will show the newly added slide
        //the show function is given the newly added id as a parameter.
        return redirect()->route('slides.show', $slide->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slide = Slide::find($id);
        return view('mains.showslide')->withSlide($slide);
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
        $slide = Slide::find($id);
        //return the view and pass in the variable already created
        return view('mains.editslide')->withSlide($slide);
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
            'img_src'  => 'required'
            ));

        //Store into the database
        $slide = new Slide; //create a new object of the Model you created. 
        $slide -> img_src = $request -> img_src; //assign the body


        $slide -> save(); //save to the database

        Session::flash('success','New slide successfully saved'); //import use Session;

        //redirect user to another page that will show the newly added slide
        //the show function is given the newly added id as a parameter.
        return redirect()->route('slides.show', $slide->id);
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
        $slide = Slide::find($id);

        $slide->delete();

        Session::flash('success','Image successfully deleted'); //import use Session;

        return redirect()->route('slides.index');
    }
}
