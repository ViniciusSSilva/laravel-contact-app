<div class="flex flex-row justify-between p-4">
    <a href="/" wire:navigate><i class="text-2xl mt-0.5 fa-solid fa-address-book"></i></a>
    <div class="flex flex-row gap-8">
    @auth
        <a href="/contact/create" class="hover:underline" wire:navigate>Create Contact</a>
        <div class="flex gap-2">
            <span>{{ auth()->user()->name }}</span>
            <button class="cursor-pointer" wire:click="logout">
                <i class="text-2xl mt-0.5 fa-solid fa-arrow-right-from-bracket"></i>
            </button>
        </div>
    @else
        <a href="/login" wire:navigate><i class="text-2xl fa-solid fa-arrow-right-to-bracket"></i></a>
    @endauth
    </div>
</div>
