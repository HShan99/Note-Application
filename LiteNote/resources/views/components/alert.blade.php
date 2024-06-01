@if (@session('success'))
    <div class="py-2 mb-4 text-green-700 bg-green-200 border-green-100">
        {{$slot}}
    </div>
@endif
