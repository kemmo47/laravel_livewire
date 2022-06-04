    <input wire:model="search" type="text" class="form-control me-2" placeholder="Search users..." aria-label="Search"/>

    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
