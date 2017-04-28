<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
use Session;
use Purifier;

class mainController extends Controller
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
        $main = Main::all();

        //return a view with all the variable passed in
        return view('mains.listpages')->withMain($main);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mains.addpages');
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
            'page_name'  => 'required'
            ));

        //Store into the database
        $main = new Main; //create a new object of the Model you created. Also remember to include the class - use App\Main
        $main -> title = $request -> title; //assign the title
        $main -> body = Purifier::clean($request -> body); //assign the body
        $main -> page_name = $request -> page_name; //assign the body

        $main -> save(); //save to the database

        Session::flash('success','New Page successfully saved'); //import use Session;

        //redirect user to another page that will show the newly added post
        //the show function is given the newly added id as a parameter.
        return redirect()->route('mains.show', $main->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $main = Main::find($id);
        return view('mains.showpage')->withMain($main);
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
        $main = Main::find($id);
        //return the view and pass in the variable already created
        return view('mains.editpage')->withMain($main);
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
            'body'  => 'required'
            ));

        //save the post to database
        $main = Main::find($id);

        $main -> title = $request->input('title');
        $main -> body = Purifier::clean($request->input('body'));

        $main -> save(); //save to the database

        Session::flash('success','Blog post successfully updated'); //import use Session;

        //redirect to post.show page
        return redirect()->route('mains.show', $main->$id);
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
        $main = Main::find($id);

        $main->delete();

        Session::flash('success','Blog post successfully deleted'); //import use Session;

        return redirect()->route('mains.index');
    }
}
