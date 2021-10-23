<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ships') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="">Add Ship</a>
                @forelse($ships as $ship)
                    <div class="font-bold text-xl">Ship Name: {{ $ship->name }}</div>
                    <div class="font-bold text-xl">Crews:</div>
                    <div class="grid grid-cols-2 gap-5">
                    @foreach($ship->users as $crew)
                            <div class="">
                            {{ $crew->name }}
                            </div>
                            <div class="">
                            {{ $crew->rank->rank }}
                            </div>       
                    @endforeach
                    </div>
                @empty
                    <div>
                        There are no ships!
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
