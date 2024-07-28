<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('dashboard.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('dashboard.clients.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/clients', $filename);
            $validatedData['image'] = "clients/" . $filename;
        }

        Client::create($validatedData);

        return redirect()->route('dashboard.clients.index')->with('success', 'Client created successfully.');
    }

    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('dashboard.clients.show', compact('client'));
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('dashboard.clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/clients', $filename);
            $validatedData['image'] = "clients/" . $filename;
        }

        $client = Client::findOrFail($id);
        $client->update($validatedData);

        return redirect()->route('dashboard.clients.index')->with('success', 'Client updated successfully.');
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('dashboard.clients.index')->with('success', 'Client deleted successfully.');
    }
}
