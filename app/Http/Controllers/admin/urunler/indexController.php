<?php

namespace App\Http\Controllers\admin\urunler;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Urun;
use App\Helper\mHelper;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function index()
    {
            
        $urunler = Cache::remember('urunler',120,function() {
            return DB::table('uruns')->get();
        });
        return view('admin.urun.index',['urunler'=>$urunler]);
    }
    public function create()
    {
        
        return view('admin.urun.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        
        $insert = Urun::create($all);
        if($insert)
        {
            return redirect()->back()->with('status','Ürün Başarı ile Eklendi');
        }
        else
        {
            return redirect()->back()->with('status','Ürün Eklenemedi');
        }

    }
    public function edit($id)
    {
        $c = Urun::where('id','=',$id)->count();
        if($c!=0){
        $urunler = Urun::where('id','=',$id)->first();
        return view('admin.urun.edit',['urunler'=>$urunler]);
       }
       else{
           return redirect('/');
       }
    }
    public function update(Request $request)
    {
        $id = $request->route('id');
        $c = Urun::where('id','=',$id)->count();
        if($c!=0)
        {
            $all = $request->except('_token');
            $all['selflink'] = mHelper::permalink($all['name']);
            $update = Urun::where('id','=',$id)->update($all);
            if($update)
            {
                return redirect()->back()->with('status','Urun başarı ile güncellenmiştir.');
            }
            else
            {
                return redirect()->back()->with('status','Urun Güncellenememiştir.');
            }
        }
       else{
           return redirect('/');
       }

    }
    public function delete($id)
    {
        $c = Urun::where('id','=',$id)->count();
        if($c!=0)
        {
$delete = Urun::where('id','=',$id)->delete();
return redirect()->back();
        }
        else{
            return redirect('/');
        }
    }
    
}
