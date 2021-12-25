@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Giriş Yap') }}
                </header>

                <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="POST" action="{{ route('login') }}">
                @csrf
         
          <div class="">
            <label class="block text-sm text-gray-00" for="username">Adınız</label>
            <input placeholder="Adınız" name="name" value="{{ old('name') }}" type="text" tabindex="3" required>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
          </div>
          <div class="">
              <br>
            <label class="block text-sm text-gray-00" for="password">Şifreniz</label>
            <input placeholder="Şifreniz" name="password"  type="password" tabindex="4" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
          </div>
          <div class="mt-4 items-center justify-between">
            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" value="login">Giriş</button>
           
          </div>
          
        </form>
            </section>
        </div>
    </div>
</main>
@endsection
