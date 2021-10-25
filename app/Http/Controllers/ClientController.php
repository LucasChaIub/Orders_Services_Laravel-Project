<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Facade\FlareClient\Http\Client as HttpClient;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clients.index', [
            'clients' => Client::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email', 'unique:clients,email'],
            'cpf' => ['nullable', 'digits:11', 'unique:clients,cpf'],
            'cnpj' => ['nullable', 'digits:14', 'unique:clients,cnpj'],
        ]);

        // $client = Client::create($request->only(['name', 'lastname', 'email', 'cpf', 'cnpj']));
        $client = Client::create($validated);

        return redirect()->route('clients.show', $client);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email', Rule::unique('clients', 'email')->ignore($client->id)],
            'cpf' => ['nullable', 'digits:11', Rule::unique('clients', 'cpf')->ignore($client->id)],
            'cnpj' => ['nullable', 'digits:14', Rule::unique('clients', 'cnpj')->ignore($client->id)],
        ]);

        $client->update($validated);

        return redirect()->route('clients.show', $client);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        return redirect('clients');
    }
}
