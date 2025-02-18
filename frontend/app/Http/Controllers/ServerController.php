<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servers;

class ServerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servers = Servers::all();
        return view('servers.index', compact('servers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = [
            'host_name' => 'required|active_url',
            'username' => 'required|min:6|alpha_dash',
            'server_port' => 'required|numeric|max:65535|min:1',
            'access_method' => 'required|in:PASSWORD,SSH_KEY_BASED',
        ];
        $accessMethod = $request->input('access_method');
        if($accessMethod === 'PASSWORD'){
            $fields['password'] = 'required';
        }elseif($accessMethod === 'SSH_KEY_BASED'){
            $fields['ssh_public_key'] = 'required';
        }

        $validated = $request->validate($fields);
        Servers::create($validated);
        return redirect()->route('servers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $server = Servers::where('id',$id)->get();
        return view('servers.show', compact('server'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $server = Servers::where('id',$id)->get();
        return view('servers.edit', compact('server'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $server = Servers::where('id',$id)->get();

        $fields = [
            'host_name' => 'required|active_url',
            'username' => 'required|min:6|alpha_dash',
            'server_port' => 'required|numeric|max:65535|min:1',
            'access_method' => 'required|in:PASSWORD,SSH_KEY_BASED',
        ];
        $accessMethod = $request->input('access_method');
        if($accessMethod === 'PASSWORD'){
            $fields['password'] = 'required';
        }elseif($accessMethod === 'SSH_KEY_BASED'){
            $fields['ssh_public_key'] = 'required';
        }

        $validated = $request->validate($fields);
        $server->update($validated);
        return redirect()->route('servers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $server = Servers::where('id',$id)->get();
        $server->delete();
        return redirect()->route('servers.index');
    }
}
