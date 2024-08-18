<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your CVs') }}
        </h2>
    </x-slot>
    <div class="flex flex-col mt-8 items-center">
        @foreach($cvs as $cv)
            <x-cv.card>
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-bold">{{ $cv->title }}</h2>
                    <p class="text-sm opacity-50">{{ $cv->updated_at }}</p>
                </div>
                <div x-show="expanded" x-collapse.duration.400ms.min.50px>
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
                        <x-primary-button @click="location.href='{{ route('cvs.show', $cv) }}'">View Full</x-primary-button>
                        <form action="{{ route('cvs.destroy', $cv) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-danger-button>Delete</x-danger-button>
                        </form>
                    </div>
                </div>
            </x-cv.card>
        @endforeach
    </div>
</x-app-layout>
