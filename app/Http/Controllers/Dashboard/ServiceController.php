<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{    public function index()
    {
        $services = Service::all();
        return view("dashboard.services.index", ["services" => $services,]);
    }
    public function create()
    {
        return view("dashboard.services.create");
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|file|mimetypes:image/svg+xml|max:2048',
        ]);

        if ($request->hasFile('icon')) {
            $filename = $request->file('icon')->getClientOriginalName() . '.' . $request->file("icon")->getClientOriginalExtension();;
            $request->file('icon')->storeAs('public/uploads', $filename);
            $validatedData['icon'] =  "uploads/" . $filename;
        }
        Service::create($validatedData);
        return redirect()->route('dashboard.services.index')
            ->with('success', 'Service added successfully.');
    }
    public function edit($id, Request $request)
    {
        $service = Service::findOrFail($id);
        return view("dashboard.services.edit", ['service'  => $service]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|image'
        ]);

        if ($request->hasFile('icon')) {
            $filename = $request->file('icon')->getClientOriginalName() . "." . $request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->storeAs('public/uploads', $filename);
            $validatedData['icon'] =  "uploads/" . $filename;
        }
        $service = Service::findOrFail($id);
        $service->update($validatedData);
        return redirect()->route('dashboard.services.index');
    }

    public function destroy($id)
    {
        Service::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Service deleted successfully.');
    }
}
