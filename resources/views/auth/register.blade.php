@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Kayıt Ol') }}
                </header>

                <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" >
                    
                    
                <div class="">
            <label class="block text-sm text-gray-00" for="username">Adınız</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="name" type="text" required="" placeholder="Adınız" aria-label="username">
          </div>
          <div class="mt-2">
            <label class="block text-sm text-gray-600" for="password">Şifreniz</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="text" required="" placeholder="*******" aria-label="password">
          </div>
    
                    <div class="mt-4">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Kayıt Ol</button>
                    </div>
                    
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
