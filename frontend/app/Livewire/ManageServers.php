<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Servers;

class ManageServers extends Component
{
    public $servers;
    public $id, $host_name, $username, $server_port, $access_method, $password, $ssh_public_key;
    public $isEditMode = false;

    protected $rules = [
        'host_name' => 'required',
        'username' => 'required|min:3|alpha_dash',
        'server_port' => 'required|numeric|max:65535|min:1',
        'access_method' => 'required|in:PASSWORD,SSH_KEY_BASED',
    ];

    public function mount($id=false)
    {
        if($id){
            $server = Servers::findOrFail($id);
            $this->id = $server->id;
            $this->host_name = $server->host_name;
            $this->username = $server->username;
            $this->server_port = $server->server_port;
            $this->access_method = $server->access_method;
            $this->password = $server->password;

            $this->ssh_public_key = $server->ssh_public_key;
            $this->isEditMode = true;
        }
    }

    public function render()
    {
        $this->servers = Servers::all();
        return view('livewire.servers.manage-servers');
    }

    public function createServer()
    {

        $this->validate();
        Servers::create([
            'host_name' => $this->host_name,
            'username' => $this->username,
            'server_port' => $this->server_port,
            'access_method' => $this->access_method,
            'password' => $this->password,
            'ssh_public_key' => $this->ssh_public_key,
        ]);

        $this->resetForm();
        session()->flash('message', 'Server created successfully!');
        return redirect()->route('servers.index');
    }

    public function editServer($serverId)
    {
        $server = Servers::find($serverId);
        $this->id = $server->id;
        $this->host_name = $server->host_name;
        $this->username = $server->username;
        $this->server_port = $server->server_port;
        $this->access_method = $server->access_method;
        $this->password = $server->password;
        $this->ssh_public_key = $server->ssh_public_key;
        $this->isEditMode = true;
    }

    public function updateServer()
    {
        $this->validate();

        $server = Servers::find($this->id);
        $server->update([
            'host_name' => $this->host_name,
            'username' => $this->username,
            'server_port' => $this->server_port,
            'access_method' => $this->access_method,
            'password' => $this->password,
            'ssh_public_key' => $this->ssh_public_key,
        ]);

        $this->resetForm();
        session()->flash('message', 'Server updated successfully!');
        return redirect()->route('servers.index');
    }

    public function deleteServer($serverId)
    {
        Post::find($serverId)->delete();
        session()->flash('message', 'Server deleted successfully!');
        return redirect()->route('servers.index');
    }

    public function resetForm()
    {
        $this->host_name = '';
        $this->username = '';
        $this->server_port = '';
        $this->access_method = '';
        $this->password = '';
        $this->ssh_public_key = '';
        $this->id = null;
        $this->isEditMode = false;
    }
}
