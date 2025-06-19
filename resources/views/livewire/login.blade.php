<div class="flex justify-center pt-10">
    <form class="flex flex-col gap-2" wire:submit="login">
        <label for="email">E-mail</label>
        <input type="email" class="border border-gray-500" wire:model="email"/>
        <label for="password">Password</label>
        <input type="password" class="border border-gray-500" wire:model="password"/>
        <button type="submit">Login</button>
    </form>
</div>
