@extends('layouts.app', ['body_width' => 'max-w-sm'])

@section('content')
<div class="w-full">
                    <div class="card-body">
                    @if (session('status'))
                            <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

  <form method="POST" action="{{ route('password.email') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
      <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">{{ __('E-Mail Address') }}</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') mb-3 border-red-500 @enderror" id="email" name="email" type="email" autocomplete="email" autofocus placeholder="johnny@furryumbrella.com">
      @error('email')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>
    <div class="">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">{{ __('Send Password Reset Link') }}</button>
    </div>
  </form>
</div>
@endsection
