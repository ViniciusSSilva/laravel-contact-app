<table class="table-auto">
    <thead>
        <tr>
            <th class="text-center px-4">Name</th>
            @auth
                <th class="text-center px-4">Actions</th>
            @endauth
        <tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
            <tr wire:key="{{ $contact->id }}">
                <td class="text-center px-4">{{ $contact->name }}</td>
                @auth
                    <td class="justify-center flex gap-4 px-4">
                        <a href="/info/{{ $contact->id }}" wire:navigate><i class="fa-solid fa-circle-info"></i></a>
                        <a href="/edit/{{ $contact->id }}" wire:navigate><i class="fa-solid fa-pen-to-square"></i></a>
                        <button
                            class="cursor-pointer"
                            wire:click="deleteContact({{ $contact->id }})"
                            wire:confirm="Are you sure you want to delete this contact?"
                        ><i class="fa-solid fa-trash"></i></button>
                    </td>
                @endauth
            </tr>
        @endforeach
    </tbody>
</table>
