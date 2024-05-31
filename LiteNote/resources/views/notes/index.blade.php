<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto mb-2 max-w-7xl sm:px-6 lg:px-8">

            <a href="{{route('notes.create')}}" class="inline-block px-4 py-2 mt-2 text-sm font-bold text-white uppercase rounded-md" style="background-color: indigo">+ New Note</a>

            @forelse ($notes as $note)
            <div class="p-6 my-6 mt-4 mb-2 bg-white border-b shadow-sm border-b-gray-200 sm:rounded-lg">
                <h2 class="text-2xl font-bold">
                    {{$note->title}}
                </h2>
                <p class="mt-2">
                    {{Str::limit($note->text, 200)}}
                </p>
                <span class="block mt-4 text-sm opacity-70">
                    {{$note->updated_at->diffForHumans()}}
                </span>
            </div>
            @empty
            <p>You have no notes yet...</p>

            @endforelse

            {{$notes->links()}}



        </div>
    </div>
</x-app-layout>
