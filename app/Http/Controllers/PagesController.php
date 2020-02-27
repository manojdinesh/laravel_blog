<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex(){
        return view ('pages.welcome');
    }

    public function getAbout(){
        $first_name = "Manoj";
        $last_name = "Kulkarni";
        $full_name = $first_name." ".$last_name;
        $email = "example@example.com";

        $data = [];
        $data['full_name'] = $full_name;
        $data['email'] = $email;

        return view ('pages.about')->withData($data);
    }

    public function getContact(){
        return view ('pages.contact');
    }

}

?>