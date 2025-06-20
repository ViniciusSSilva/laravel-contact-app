<form class="flex flex-col gap-4" wire:submit="login">
    <div class="flex flex-col">
        <label for="email" class="font-bold">E-mail</label>
        <input type="email" class="border border-gray-500 p-1 rounded" wire:model="email"/>
        @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    </div>
    <div class="flex flex-col">
        <label for="password" class="font-bold">Password</label>
        <input type="password" class="border border-gray-500 p-1 rounded" wire:model="password"/>
        @error('login') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    </div>
    <button type="submit" class="cursor-pointer bg-blue-800 text-white rounded p-1">Login</button>
</form>
