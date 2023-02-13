<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\email;

class HomeController extends Controller
{
    public function index()
    {
      return view('welcome');
    }

    public function save(Request $request)
{
    
    
    $validatedData = $request->validate([
        'email' => 'required|email',
    ]);

    $email = new Email;
    $email->email = $request->input('email');
    $email->save();

    return redirect('/welcome')->with('success', 'Email has been added to the database.');
}

   

     
}

