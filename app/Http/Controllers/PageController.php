<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show_data()
    {
        return "<h1>This is a method show_data</h1>";
    }

    public function data_show(string $id)
    {
        return "<h1>This is a method data_show -> {$id}</h1> ";
    }

    public function for_view()
    {
        return view('welcome');
    }

    public function hidden_fun()
    {
        return "This is a function of Hidden_fun";
    }
}
