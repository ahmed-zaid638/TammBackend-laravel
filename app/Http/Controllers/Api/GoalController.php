<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Goal;


class GoalController extends Controller
{
    public function index()
    {

        $goals = Goal::all();
        return response()->json($goals);
    }
}
