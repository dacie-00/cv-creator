<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your CVs') }}
        </h2>
    </x-slot>
    <div class="text-2xl text-center my-4">
        <x-notification></x-notification>
    </div>
    <div class="flex flex-col items-center">
        @foreach($cvs->reverse() as $cv)
            <x-cv.card>
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-bold">{{ $cv->title }}</h2>
                    <p class="text-sm opacity-50">{{ $cv->updated_at }}</p>
                </div>
                <div x-show="expanded" x-collapse.duration.300ms.min.5px>
                    <div class="flex justify-between space-x-16">
                        <p class="max-w-prose">{{ Str::limit($cv->about, 500, '...') }}</p>
                        <div>
                            <p> {{ $cv->full_name }}</p>
                            <p> {{ $cv->email }}</p>
                            <p> {{ $cv->phone_number }}</p>
                            <p> {{ $cv->address }}</p>
                        </div>
                    </div>
                    <div class="pt-8 flex justify-between items-center">
                        <x-primary-button @click="location.href='{{ route('cvs.edit', $cv) }}'">Edit</x-primary-button>
                        <x-primary-button @click="location.href='{{ route('cvs.show', $cv) }}'">View Full
                        </x-primary-button>
                        <form action="{{ route('cvs.destroy', $cv) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-danger-button>Delete</x-danger-button>
                        </form>
                    </div>
                </div>
            </x-cv.card>
        @endforeach
        <form action="{{ route('cvs.store') }}" method="POST">
            @csrf
            <x-primary-button type="submit" class="scale-150 my-8">Create New CV</x-primary-button>
        </form>
    </div>
</x-app-layout>
