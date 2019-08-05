<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        return view('Pages.welcome');
    }
    public function getAbout() {
        $data = [];
        $data['name'] = "John W. Clark";
        $data['email'] = "john.wilbur.clark@gmail.com";
        return view('Pages.about')->withData( $data );
    }
    public function getContact() {
        return view('Pages.contact');
    }

}

