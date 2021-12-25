@extends('layouts.admin')

@section('content')
<div class="h-screen font-sans register bg-cover">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
            <div class="leading-loose">
                <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
                    <p class="text-gray-800 font-medium">Kayıt Ol</p>
                    <div class="">
                        <label class="block text-sm text-gray-00" for="cus_name">Adınız</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="cus_name" name="cus_name" type="text" required="" placeholder="Adınız" aria-label="Name">
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="cus_email">Mail Adresiniz</label>
                        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="cus_email" type="text" required="" placeholder="Mail Adresiniz" aria-label="Email">
                    </div>
                    
                    
                    
    
                    <div class="mt-4">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Kayıt Ol</button>
                    </div>
                    <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="/login">
                        Zaten Hesabınız Var mı ?
                    </a>
                </form>
            </div>
        </div>
    </div>
    
</div>
@endsection