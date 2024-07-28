<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FormSubmission;

class FormController extends Controller
{
    public function index(Request $request)
    {
        return "form inddex";
    }
    public function store(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nickname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phonenumber' => 'required|string|max:20',
            'message' => 'required|string',
        ]);
       

        // Create a new form submission entry
        FormSubmission::create($validatedData);

        // Return a response indicating success
        return response()->json(['message' => 'Form submitted successfully!'], 200);
    }
}
