<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(){
        // $contacts = Contact::get();
        $contacts = Contact::with('students')->get();
        return $contacts;
    }
}
