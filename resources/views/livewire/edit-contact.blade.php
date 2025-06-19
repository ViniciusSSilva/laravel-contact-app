<div class="flex justify-center pt-10">
    <form class="flex flex-col gap-2" wire:submit="save">
        <label for="name">Name</label>
        <input type="text" class="border border-gray-500" wire:model="name"/>
        <label for="contact">Contact</label>
        <input type="text" class="border border-gray-500" wire:model="contact"/>
        <label for="email">E-mail</label>
        <input type="email" class="border border-gray-500" wire:model="email"/>
        <button type="submit">Save</button>
    </form>
</div>
