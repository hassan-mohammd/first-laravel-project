<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class FrontEndController extends Controller
{
    //

    public function __construct()
    {
         $this->middleware('auth')->except('getAge');
    }
    public function getName(){
        echo ' My Name is Hassan ';
    }

    public function getAge(){
        echo ' I am 28 Years Old ';
    }


}
