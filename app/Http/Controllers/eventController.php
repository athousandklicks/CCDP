<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use Session;
use Image;
//use File;


class eventController extends Controller
{
         public function __construct()
    {
        $this->middleware('auth');
    } 
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Store all the pages in a variable
        $event = Event::all();

        //return a view with all the list of events stored
        return view('mains.listevents')->withEvent($event);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mains.addevents');
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
            'body'  => 'required',
            'venue'  => 'required|max:1000',
            'date'  => 'required|max:25',
            'time'  => 'required|max:25'

            ));

        //Store into the database
        $event = new Event; //create a new object of the Model you created. Also remember to include the class - use App\event
        $event -> title = $request -> title; //assign the title
        $event -> body = $request -> body; //assign the body
        $event -> venue = $request -> venue; //assign the body
        $event -> date = $request -> date; //assign the body
        $event -> end_date = $request -> end_date; //assign the body
        $event -> time = $request -> time; //assign the body
        $event -> end_time = $request -> end_time; //assign the body




    if($request->hasFile('event_flyer')){ //since it is optional, check to see if image is added
    $image  = $request->file('event_flyer'); //request the image
    $filename = time().'.'.$image->getClientOriginalExtension(); //use the timestamp to make image name unique. Concat the time stamp to the image scr name and keep the original extension if you want or encode to a specific format
    $location = public_path('images/cabal/events/'.$filename); //store the image in the folder created in the public folder

    Image::make($image)->resize(800, 400)->save($location); //Make the image with the help of the image intervention library added to the project thru composer from image.intervention.io

    $event -> img_scr = $filename; //save filename to DB
    }

        $event -> save(); //save to the database

        Session::flash('success','New Event successfully saved'); //import use Session;

        //redirect user to another page that will show the newly added event
        //the show function is given the newly added id as a parameter.
        return redirect()->route('events.show', $event->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('mains.showevent')->withEvent($event);
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
        $event = Event::find($id);
        //return the view and pass in the variable already created
        return view('mains.editevent')->withEvent($event);
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
            $this->validate($request, array(
            'title' => 'required|max:255',
            'body'  => 'required',
            'venue'  => 'required|max:1000',
            'date'  => 'required|max:25',
            'time'  => 'required|max:25'
            ));

        //Store into the database
//      Also remember to include the class - use App\event
        $event = Event::find($id); //find the object using the ID
        $event -> title = $request -> title; //assign the title
        $event -> body = $request -> body; //assign the body
        $event -> venue = $request -> venue; //assign the body
        $event -> date = $request -> date; //assign the body
        $event -> end_date = $request -> end_date; //assign the body
        $event -> time = $request -> time; //assign the body
        $event -> end_time = $request -> end_time; //assign the body


    if($request->hasFile('event_flyer')){ //since it is optional, check to see if image is added

//    $temp_filename = Event::get('img_scr');
 //   $path = public_path().'images/cabal/';
 //   $file->delete();


 //   $img = Event::findOrFail($id);
//    $image_path = app_path().'/images/cabal/'.$img->img_scr;
    //dd($image_path);
 //   if(File::exists($image_path))
 //   {
 //       File::delete($image_path);
  //  }


    $image  = $request->file('event_flyer'); //request the image
    $filename = time().'.'.$image->getClientOriginalExtension(); //use the timestamp to make image name unique. Concat the time stamp to the image scr name and keep the original extension if you want or encode to a specific format
    $location = public_path('images/cabal/events/'.$filename); //store the image in the folder created in the public folder

    Image::make($image)->resize(800, 400)->save($location); //Make the image with the help of the image intervention library added to the project thru composer from image.intervention.io

    $event -> img_scr = $filename; //save filename to DB
}

    $event -> save(); //save to the database

        Session::flash('success','New Event successfully saved'); //import use Session;

        //redirect user to another page that will show the newly added event
        //the show function is given the newly added id as a parameter.
        return redirect()->route('events.show', $event->id);
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
        $event = Event::find($id);

        $event->delete();

        Session::flash('success','Blog post successfully deleted'); //import use Session;

        return redirect()->route('events.index');
    }
}
