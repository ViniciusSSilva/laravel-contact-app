<div class="flex justify-center pt-10">
    <form class="flex flex-col gap-2" wire:submit="save">
    <input type="text" class="border border-gray-500" wire:model="name"/>
    <input type="text" class="border border-gray-500" wire:model="contact"/>
    <input type="email" class="border border-gray-500" wire:model="email"/>
    <button type="submit">Save</button>
    </form>
</div>
