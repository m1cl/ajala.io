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
    return view('pages.welcome');
  }

  public function getAbout() {
    $first = 'Michael';
    $last = 'Ajala';
    $email = "michael@ajala.io";
    $full = $first . " " . $last;
    $data = [];
    $data['fullname'] = $full;
    $data['email'] = $email;
    $data['first'] = $first;
    $data['last'] = $last;

    return view('pages.about')->withData($data);
  }

  public function getMusic() {
    return view('pages.music');
  }

  public function getContact() {
    return view('pages.contact');
  }
}
