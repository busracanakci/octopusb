@extends('layouts.admin')
@section('content')

                       @if(session("status"))
                       <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                       
                        <p class="text-sm">{{session("status")}}</p>
                       </div>
                        
                        @endif             
                    <form class="x-6 py-2 border-b border-light-grey" enctype="multipart/form-data" action="{{route('admin.urunler.create.post')}}"  method="POST">
                    {{csrf_field()}}
                    <p class=" bg-grey-dark  text-white font-medium">Ürün Ekle</p>
                    <br>
                    <div class="">
                        <label class="block text-sm text-gray-00" for="cus_name">Ürün Adı</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"  name="name" type="text" required=""  aria-label="Name">
                    </div>
                    
    
                    <div class="mt-4">
                        <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-full" type="submit">EKLE</button>
                    </div>
                    
                </form>

                                    

        
      
               
@endsection