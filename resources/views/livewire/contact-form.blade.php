<form class="flex flex-col gap-4" wire:submit="save">
    <div class="flex flex-col">
        <label for="name" class="font-bold">Name</label>
        <input type="text" class="border border-gray-500 rounded p-1" wire:model="name"/>
    </div>
    <div class="flex flex-col">
        <label for="contact" class="font-bold">Contact</label>
        <input type="text" class="border border-gray-500 rounded p-1" wire:model="contact"/>
    </div>
    <div class="flex flex-col">
        <label for="email" class="font-bold">E-mail</label>
        <input type="email" class="border border-gray-500 rounded p-1" wire:model="email"/>
    </div>
    <button type="submit" class="cursor-pointer font-bold bg-blue-800 text-white rounded p-1">Save</button>
</form>
