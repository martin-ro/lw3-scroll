<?php

use App\Models\User;
use function Livewire\Volt\{computed, usesPagination};

usesPagination();

$users = computed(function () {
    return User::paginate(100);
});

?>

<x-layouts.app>
	@volt
		<div>
			<ul>
				@foreach ($this->users as $user)
					<li><a wire:navigate href="/users/{{ $user->id }}">{{ $user->name }}</a></li>		
				@endforeach
			</ul>
	
			<div>{{ $this->users->links() }}</div>
		</div>
	@endvolt
</x-layouts.app>