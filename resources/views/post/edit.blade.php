@extends('layouts.app')

@section('content')
    @include('partials.error')

    <form method="POST" action="{{ route('post.update', $post) }}">
        @method('PUT')
        @csrf

        <label class="block">
            <span class="text-gray-700 font-semibold">Title</span>
            <input type="text" name="title" class="form-input mt-1 block w-full" placeholder="The best post ever…" value="{{ old('title', $post->title) }}">
        </label>
        <label class="block mt-6">
            <span class="text-gray-700 font-semibold">Author</span>
            <input type="text" name="author" class="form-input mt-1 block w-full" placeholder="John Smith" value="{{ old('author', $post->author) }}">
        </label>
        <label class="block mt-6">
            <span class="text-gray-700 font-semibold">Content</span>
            <textarea name="content" class="form-textarea mt-1 block w-full" rows="3" placeholder="Enter some long form content.">{{ old('content', $post->content) }}</textarea>
        </label>

        <button type="submit" class="mt-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
    </form>

@endsection
