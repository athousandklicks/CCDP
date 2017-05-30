<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\Main;
use App\Event;
use App\Gallery;
use App\Slide;
use App\User;
use Session;

class adminHomeController extends Controller
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
        $home = Home::all();
        $event = Event::all();
        $slide = Slide::all();
        $gallery = Gallery::all();
        $main = Main::all();
        $admin = User::all();
         //return a view 
        return view('mains.index', compact('event','slide','gallery',
            'main', 'home', 'admin'));
    }

    public function permission(){
        $admin = User::all();
        return view('partials.cabalsidenav', compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin = User::all();
        return view('partials.cabalsidenav', compact('admin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


        public function getDbStats()
    {
        //
    }
}
