<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto mb-2 max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 my-6 mt-4 mb-2 bg-white border-b shadow-sm border-b-gray-200 sm:rounded-lg">
                @csrf
                <form action="{{route('notes.store')}}" method="POST">
                    <x-input type="text" name="title" placeholder="Title" class="w-full" autocomplete="off"></x-input>
                    <x-textarea name="textarea" placeholder="Start Tyoe Here" rows="10" class="w-full mt-6"></x-textarea>
                    <x-button class="mt-6">Save Note</x-button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
