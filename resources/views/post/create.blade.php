@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('post.store') }}">
        @csrf

        <label class="block">
            <span class="text-gray-700 font-semibold">Title</span>
            <input type="text" name="title" class="form-input mt-1 block w-full" placeholder="The best post ever…">
        </label>
        <label class="block mt-6">
            <span class="text-gray-700 font-semibold">Author</span>
            <input type="text" name="author" class="form-input mt-1 block w-full" placeholder="John Smith">
        </label>
        <label class="block mt-6">
            <span class="text-gray-700 font-semibold">Content</span>
            <textarea name="content" class="form-textarea mt-1 block w-full" rows="3" placeholder="Enter some long form content."></textarea>
        </label>

        <button type="submit" class="mt-8 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
    </form>

@endsection
