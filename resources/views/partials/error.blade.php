@if (count($errors) || Session::has('error'))
    <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 my-6" role="alert">
        <p><span class="font-bold">Whoops!</span> There were some problems with your input.</p>
        @if (count($errors))
            <ul class="list-disc list-inside mt-4">
            @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endif
