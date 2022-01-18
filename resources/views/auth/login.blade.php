@extends('_layout')

@section('title', 'Register')

@section('body')
<div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div>
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        Sign in to your account
      </h2>
    </div>
    <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
      @csrf
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm space-y-4">
        <div>
          <label class="sr-only">Email address</label>
          <input name="email" type="email" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
          @error('email') <small class="text-red-500">{{ $message }}</small> @enderror
        </div>
        
        <div>
          <label class="sr-only">Password</label>
          <input name="password" type="password" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
          @error('password') <small class="text-red-500">{{ $message }}</small> @enderror
        </div>
      </div>

      <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Sign in
        </button>
      </div>
    </form>
  </div>
</div>
@endsection