@extends('layouts.adminlogin')

@section('content')
<div class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
      <div class="leading-loose">
                         <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <p class="text-gray-800 font-medium text-center text-lg font-bold">GİRİŞ YAP</p>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="block text-sm text-gray-00">Mail Adresiniz</label>

                                <div class="col-md-6">
                                    <input id="email" placeholder="Mail Adresiniz" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="block text-sm text-gray-00">Şifreniz</label>

                                <div class="col-md-6">
                                    <input id="password" placeholder="Şifreniz" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mt-4 items-center justify-between">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" >
                                        Giriş
                                    </button>
                                </div>
                            </div>
                            
                        </form>
  
      </div>
    </div>
</div></div>
@endsection