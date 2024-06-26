<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto mb-2 max-w-7xl sm:px-6 lg:px-8">
        <x-alert>
            {{@session('success')}}
        </x-alert>


        <div class="flex">
            <p class="opacity-70">
                <strong>Created:</strong>
                {{$note->created_at->diffForHumans()}}
            </p>
            <p class="pl-3 opacity-70">
                <strong>Updsted At:</strong>
                {{$note->updated_at->diffForHumans()}}
            </p>
            <button><a href="{{route('notes.edit', $note)}}" class="ml-4 font-bold text-white btn btn-primary" style="background-color: indigo ">Edit Note</a></button>
            <form action="{{route('notes.destroy', $note)}}" method="POST">
            @method('delete')
            @csrf
            <button type="submit" class="ml-4 btn btn-danger" onclick="return confirm('Are you sur to delete this Note?')">Delete Note</button>
            </form>


        </div>
        <div class="p-6 my-6 mt-4 mb-2 bg-white border-b shadow-sm border-b-gray-200 sm:rounded-lg">
                <h2 class="text-2xl font-bold">
                    {{$note->title}}
                </h2>
                <p class="whitespace-pre-wrap">
                    {{$note->text}}
                </p>
        </div>
    </div>
</x-app-layout>
