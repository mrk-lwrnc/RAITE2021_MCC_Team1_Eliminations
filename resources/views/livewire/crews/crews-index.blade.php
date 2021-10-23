<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crews') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach($crews as $crew)
                    <div>{{ $crew->name }} {{ $crew->email }} {{ $crew->rank->rank }} {{ $crew->ship->name }}
                        <a href="{{ route('crews.edit', [$crew->id]) }}" >Edit User</a> <a href="">Delete User</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
