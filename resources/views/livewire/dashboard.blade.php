<div class="flex flex-col gap-2">
    @foreach ($contacts as $contact)
        <div class="flex flex-row justify-between" wire:key="{{ $contact->id }}">
            <span>{{ $contact->id }}</span>
            <span>{{ $contact->name }}</span>
            <span>{{ $contact->contact }}</span>
            <span>{{ $contact->email }}</span>
            @auth
                <div class="flex gap-2">
                    <a href="/edit/{{ $contact->id }}" wire:navigate>Edit</a>
                    <button wire:click="deleteContact({{ $contact->id }})">Delete</button>
                </div>
            @endauth
        </div>
    @endforeach
</div>
