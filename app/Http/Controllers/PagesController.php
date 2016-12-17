<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
  public function getIndex() {
    # process vars or params 
    # talk to the model
    # receive from the model
    # compile or process data from the model if needed
    # pass the data to the correct view 
    return view('welcome');
  }

  public function getAbout() {
    return view('about');
  }

  public function getMusic() {
    return view('music');
  }

  public function getContact() {
    return view('contact');
  }
}
