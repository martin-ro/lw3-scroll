<div>
	<ul>
		@foreach ($users as $user)
			<li><a wire:navigate href="/users/{{ $user->id }}">{{ $user->name }}</a></li>
		@endforeach
	</ul>

	<div>{{ $users->links() }}</div>
</div>
