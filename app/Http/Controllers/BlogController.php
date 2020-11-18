<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class BlogController extends BaseController
{

    function onLoadBlog() {

    }

    function onLoadPage() {
      return view('frontend.blog');
    }

    function onLoadBlogs() {
      return view('frontend.blogs');
    }

    function onLoadTest() {
      return view('frontend.test');
    }

    function index(){
      return view('frontend.softwaredev');
    }
}
