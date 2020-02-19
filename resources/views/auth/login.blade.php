@extends('layouts.app', ['body_width' => 'max-w-sm'])

@section('content')
    <div class="w-full">
  <form method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
      <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">{{ __('E-Mail Address') }}</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') mb-3 border-red-500 @enderror" id="email" name="email" type="email" autocomplete="email" autofocus placeholder="johnny@furryumbrella.com">
          @error('email')
          <p class="text-red-500 text-xs italic">{{ $message }}</p>
          @enderror
    </div>
    <div class="mb-3">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">{{ __('Password') }}</label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="******************">
    </div>
    <div class="mb-6">
        <label class="block text-gray-700 text-sm"><input class="mr-2 leading-tight" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}</label>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">{{ __('Login') }}</button>
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
    </div>
  </form>
</div>
@endsection
