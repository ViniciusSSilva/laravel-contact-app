<table class="table-auto">
    <thead>
        <tr>
            <th class="text-center px-4 py-2">Name</th>
            @auth
                <th class="text-center px-4 py-2">Actions</th>
            @endauth
        <tr>
    </thead>
    <tbody>
        @if(count($contacts))
            @foreach ($contacts as $contact)
                <tr wire:key="{{ $contact->id }}">
                    <td class="text-center px-4 py-2">{{ $contact->name }}</td>
                    @auth
                        <td class="justify-center flex gap-4 px-4 py-2">
                            <a href="/contact/{{ $contact->id }}" wire:navigate><i class="text-blue-800 fa-solid fa-circle-info"></i></a>
                            <a href="/contact/{{ $contact->id }}/edit" wire:navigate><i class="text-blue-800 fa-solid fa-pen-to-square"></i></a>
                            <button
                                class="cursor-pointer"
                                wire:click="deleteContact({{ $contact->id }})"
                                wire:confirm="Are you sure you want to delete this contact?"
                            ><i class="text-red-500 fa-solid fa-trash"></i></button>
                        </td>
                    @endauth
                </tr>
            @endforeach
        @else
            <tr><td class="text-center py-2" colspan="2">No contacts!</td></tr>
        @endif
    </tbody>
</table>
