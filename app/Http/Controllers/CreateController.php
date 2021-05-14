<?php


namespace App\Http\Controllers;


use Inertia\Inertia;

class CreateController extends Controller
{

    public function index()
    {
        return view('create');
//        return Inertia::render('Create');
    }
}
