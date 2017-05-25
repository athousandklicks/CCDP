<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Event;
use App\Main;
use App\Gallery;
use Mail;
use Session;


class staticPagesController extends Controller
{

    public function postContact(Request $request) {
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required|email',
      'subject' => 'min:3',
      'message' => 'min:10']);

    $data = array(
      'name' => $request->name,
      'email' => $request->email,
      'subject' => $request->subject,
      'bodyMessage' => $request->message
      );

    Mail::send('emails.contact', $data, function($message) use ($data){
      $message->from($data['email']);
      $message->to('omescroll@gmail.com');
      $message->subject($data['subject']);
    });

    Session::flash('success', 'Your Email was Sent!');

    return redirect('/contact');
  }

  public function getContact()
  {
        $event = Event::all();
    return view('static_pages.contact', compact('event'));
 }


 public function getGallery()
 {
    $gallery = Gallery::all();
   //$gallery = Gallery::paginate(21);
    return view('static_pages.gallery', compact('gallery'));
}


public function getEvents()
{
    $event = Event::all();
    return view('static_pages.event', compact('event'));
}


public function getProgrammes()
{
    $event = Event::all();
    return view('static_pages.programmes', compact('event'));

}

public function getPortfolio()
{
    $post = Main::where('page_name', '=', 'portfolio')->get();
    $event = Event::all();
    return view('static_pages.portfolio', compact('post','event'));
}

public function getAbout()
{
    $about = Main::where('page_name', '=', 'about')->get();
    $event = Event::all();
    return view('static_pages.about', compact('event', 'about'));

}


public function getIndex()
{
    $index = Main::where('page_name', '=', 'index')->get();
    $slide = Slide::all();

    return view('static_pages.index', compact('slide', 'index'));
}

   public function getEventDetails($id)
    {
      $event = Event::all();
      $event_details = Event::where('id', '=', $id)->first();
      return view('static_pages.eventdetails', compact('event_details', 'event'));
    }

}
