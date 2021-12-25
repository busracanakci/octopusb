@extends('layouts.admin')


@section('content')
<div class="bg-white-300 flex-1 p-3 overflow-hidden">
                <div class="flex flex-col">
                                
                              <div class="card">
                                <div class="card-content table-responsive">
                                <div class="px-6 py-2 border-b border-light-grey">
                                <div class="font-bold text-xl"><button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-full"><a href="{{route('admin.urunler.create')}}" >ÜRÜN EKLE</a></button></div>
                               </div>
                            <div class="table-responsive">
                                <table class="table text-grey-darkest">
                                    <thead class="bg-grey-dark text-white text-normal">
                                    <tr>
                                        <th scope="col">Ürün Adı</th>
                                        <th scope="col">Düzenle</th>
                                        <th scope="col">Sil</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($urunler as $key => $urun)
                                    <tr>
                                    
                                        <th scope="row">{{$urun->name}}</th>
                                        <td>
                                            <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-full">
                                            <a href="{{ route('admin.urunler.edit',['id'=>$urun->id])   }}">Düzenle</a></td>
                                            </button>
                                        </td>
                                        <td>
                                        <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-full">
                                        <a href="{{ route('admin.urunler.delete',['id'=>$urun->id])   }}">Sil</a>
                                            </button>
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                    

                                    

                                    

                                    </tbody>
                                </table>
                            </div>
                </div>
</div>
                        
                        
                </div>
</div>
@endsection
