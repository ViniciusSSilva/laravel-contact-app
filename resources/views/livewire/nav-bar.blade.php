        <div class="flex flex-row justify-between p-4">
            <a href="/" wire:navigate><i class="text-2xl mt-0.5 fa-solid fa-address-book"></i></a>
            <div class="flex flex-row gap-8">
                @auth
                    <a href="/create" wire:navigate>Create Contact</a>
                    <div class="flex gap-2">
                        <span>{{ auth()->user()->name }}</span>
                        <button wire:click="logout">
                            <i class="text-2xl mt-0.5 fa-solid fa-arrow-right-from-bracket"></i>
                        </button>
                    </div>
                @endauth
                @guest
                    <a href="/login" wire:navigate><i class="text-2xl fa-solid fa-arrow-right-to-bracket"></i></a>
                @endguest
            </div>
        </div>
