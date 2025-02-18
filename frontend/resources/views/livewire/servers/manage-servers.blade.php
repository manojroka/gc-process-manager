<div>
    

    <!-- Post Form -->
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg">
        <!-- Success Message -->
    @if (session()->has('message'))
        <div class="mt-1 text-sm text-red-600">
            {{ session('message') }}
        </div>
    @endif
        <h2 class="text-2xl font-semibold text-gray-700 mb-6">{{ $isEditMode ? 'Edit Server' : 'Create New Server' }}</h2>
        <form wire:submit.prevent="{{ $isEditMode ? 'updateServer' : 'createServer' }}">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Hostname</label>
                <input type="text" id="host_name" wire:model="host_name" placeholder="Enter Hostname" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"/>
                @error('host_name') <span class="mt-1 text-sm text-red-600">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">Username</label>
                <input id="username" wire:model="username" placeholder="Enter username" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"/>
                @error('username') <span class="mt-1 text-sm text-red-600">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">SSH Port</label>
                <input type="text" id="server_port" wire:model="server_port" placeholder="Enter server port" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"/>
                @error('server_port') <span class="mt-1 text-sm text-red-600">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">Access Method</label>
                <select id="access_method" wire:model="access_method" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option value="PASSWORD" selected>Password</option>
                    <option value="SSH_KEY_BASED">SSH KEY BASED</option>
                </select>
                @error('access_method') <span class="mt-1 text-sm text-red-600">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" wire:model="password" placeholder="Enter password" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"/>
                @error('password') <span class="mt-1 text-sm text-red-600">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">SSH Public Key</label>
                <textarea id="ssh_public_key" wire:model="ssh_public_key" placeholder="Enter ssh public key" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                @error('ssh_public_key') <span class="mt-1 text-sm text-red-600">{{ $message }}</span> @enderror
            </div>

            <button class="px-6 py-2 text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded-md" type="submit">{{ $isEditMode ? 'Update Server' : 'Create Server' }}</button>
        </form>
    </div>
</div>
