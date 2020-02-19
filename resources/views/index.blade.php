@extends('layouts.app')

@section('content')
<div class="min-w-full py-2 px-6 md:px-0">
@foreach($posts as $post)
    <div class="mb-6">
        <h2 class="text-4xl font-semibold text-gray-900"><a href="{{ route('article.show', $post) }}" class="hover:underline">{{ $post->title }}</a></h2>
        <p class="text-gray-700 text-base mt-1">Written by <span class="text-gray-900 font-semibold">{{ $post->author }}</span> on {{ $post->created_at->format('F j, Y') }}</p>
    </div>
@endforeach
</div>
@endsection
