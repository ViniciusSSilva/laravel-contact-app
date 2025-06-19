    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="text-start">ID</th>
                <th>Name</th>
                @auth
                    <th class="text-end">Actions</th>
                @endauth
            <tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr wire:key="{{ $contact->id }}">
                    <td class="text-start">{{ $contact->id }}</td>
                    <td class="text-center">{{ $contact->name }}</td>
                    @auth
                        <td class="justify-end flex gap-4">
                            <a href="/info/{{ $contact->id }}" wire:navigate><i class="fa-solid fa-circle-info"></i></a>
                            <a href="/edit/{{ $contact->id }}" wire:navigate><i class="fa-solid fa-pen-to-square"></i></a>
                            <button
                                wire:click="deleteContact({{ $contact->id }})"
                                wire:confirm="Are you sure you want to delete this contact?"
                            ><i class="fa-solid fa-trash"></i></button>
                        </td>
                    @endauth
                </tr>
            @endforeach
        </tbody>
    </table>
