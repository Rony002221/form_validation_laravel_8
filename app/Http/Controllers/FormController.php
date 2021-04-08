<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormSubmit;

class FormController extends Controller
{
    public function createForm()
    {
        return view('login');
    }


    public function submitForm(FormSubmit $req)
    {
        $req->validated();
    }

    /* public function submitForm(Request $req)
    {
        $errorCheck = [
            'email' => "required|email", 'password' => "required|max:4", 'check' => 'required'
        ];

        $this->validate($req, $errorCheck);
        return $req->all();
    } */
}
