<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Crew') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @if(session('success'))
                    <div>
                    {{ session('success') }}
                    </div>
                @elseif(session('fail'))
                    <div>
                    {{ session('fail') }}
                    </div>
                @endif

                @if($errors)
                    @foreach($errors as $error)
                        <div>
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form wire:submit.prevent="update">
                    <div>
                        <label>
                            Name:
                        </label>
                        <input wire:model="crew.name" type="text"/>
                        
                    </div>

                    <div>
                        <label>
                            Email:
                        </label>
                        <input wire:model="crew.email" type="text"/>
                        
                    </div>

                    <div>
                        <label>
                            Rank:
                        </label>
                        
                        <select wire:model.defer="crew.rank">
                            <option value="{{ $crew['rank'] }}" selected="true">
                                {{ $crew['rank_name'] }}
                            </option>
                            @foreach ($ranks as $rank)
                                <option value="{{ $rank['id'] }}" wire:key="rank-{{ $loop->index }}">
                                    {{ $rank['rank'] }}
                                </option>
                            @endforeach
                        </select>
                        
                    </div>

                    <div>
                        <label>
                            Ship:
                        </label>
                        
                        <select wire:model="crew.ship">
                            <option value="{{ $crew['ship'] }}" selected="true">
                                {{ $crew['ship_name'] }}
                            </option>
                            @foreach ($ships as $ship)
                                <option value="{{ $ship['id'] }}" wire:key="ship-{{ $loop->index }}">
                                    {{ $ship['name'] }}
                                </option>
                            @endforeach
                        </select>
                        
                    </div>

                    <button type="submit" class="bg-blue-500 h-10 w-10">
                        Save
                    </button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
