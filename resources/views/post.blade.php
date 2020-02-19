@extends('layouts.app')

@section('content')
  <div class="min-w-full py-2 px-6 md:px-0">
      <h2 class="text-4xl font-semibold text-gray-900">{{ $post->title }}</h2>
      <p class="text-gray-700 text-base mt-1">Written by <span class="text-gray-900 font-semibold">{{ $post->author }}</span> on {{ $post->created_at->format('F j, Y') }}</p>

      <p class="text-gray-900 my-12">{!! nl2br($post->content) !!}</p>

      <p><a href="{{ url('/') }}" class="text-gray-700 hover:text-green-900 hover:underline">&leftarrow; All posts</a></p>
  </div>
@endsection
