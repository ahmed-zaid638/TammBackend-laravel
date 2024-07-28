<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\FormSubmission;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = FormSubmission::all();
        return view('dashboard.contacts.index', compact('contacts'));
    }
}


