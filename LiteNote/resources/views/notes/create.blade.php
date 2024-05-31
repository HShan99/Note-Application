<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto mb-2 max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 my-6 mt-4 mb-2 bg-white border-b shadow-sm border-b-gray-200 sm:rounded-lg">
                <form action="{{route('notes.store')}}" method="POST">
                    @csrf
                    <x-input
                    type="text"
                    name="title"
                    field="title"
                    placeholder="Title"
                    class="w-full"
                    autocomplete="off"
                    :value="@old('title')"></x-input>

                    <x-textarea name="text"
                    field="text"
                    placeholder="Start Tyoe Here"
                    rows="10"
                    class="w-full mt-6"
                    :value="@old('text')"></x-textarea>

                    <x-button class="mt-6">Save Note</x-button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
