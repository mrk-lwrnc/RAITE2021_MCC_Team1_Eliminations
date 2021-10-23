<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Ship') }}
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

                <form wire:submit.prevent="create">
                    <div>
                        <label>
                            Name:
                        </label>
                        <input wire:model="form.name" type="text"/>
                        
                    </div>
                    <div>
                        <label>
                            Speed:
                        </label>
                        <input wire:model="form.speed" type="number"/>
                        
                    </div>
                    <div>
                        <label>
                            Description:
                        </label>
                        <input wire:model="form.description" type="text"/>
                        
                    </div>
                    <button type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
