<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Goal;

class GoalsController extends Controller
{
    public function index()
    {
        $goals = Goal::all();
        return view('dashboard.goals.index', compact('goals'));
    }
    public function create()
    {
        return view('dashboard.goals.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
        ]);
        Goal::create($validatedData);
        return redirect()->route('dashboard.goals.index')->with('success', 'Goal created successfully.');
    }
    public function show($id)
    {
        $goal = Goal::findOrFail($id);
        return view('dashboard.goals.show', compact('goal'));
    }
    public function edit($id)
    {
        $goal = Goal::findOrFail($id);
        return view('dashboard.goals.edit', compact('goal'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
        ]);
        $goal = Goal::findOrFail($id);
        $goal->update($validatedData);

        return redirect()->route('dashboard.goals.index')->with('success', 'Goal updated successfully.');
    }
    public function destroy($id)
    {
        $goal = Goal::findOrFail($id);
        $goal->delete();

        return redirect()->route('dashboard.goals.index')->with('success', 'Goal deleted successfully.');
    }
}
