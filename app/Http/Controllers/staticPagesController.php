<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staticPagesController extends Controller
{
		public function getContact()
    {
    	return view("static_pages.contact");
    }


        public function getGallery()
    {
        return view("static_pages.gallery");
    }


        public function getEvents()
    {
        return view("static_pages.events");
    }


        public function getProgrammes()
    {
        return view("static_pages.programmes");
    }

        public function getPortfolio()
    {
        return view("static_pages.portfolio");
    }

	 	public function getAbout()
    {
    	return view("static_pages.about");
    }


         public function getIndex()
    {
        return view("static_pages.index");
    }
}
