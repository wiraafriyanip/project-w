<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class LaptopController extends Controller
{
    //
    public function index()
    {
        $laptops=Laptop::latest()->paginate(10);
        return view('laptop.index', compact('laptops'));
    }
    public function create()
    {
        return view('laptop.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'kode'=>'required',
            'seri'=>'required',
            'namalaptop'=>'required',
            'jenis'=>'required',
            'hargajual'=>'required'
           
        ]);
        DB::table('laptops')->insert([
            'kode'=>$request->kode,
            'seri'=>$request->seri,
            'namalaptop'=>$request->namalaptop,
            'jenis'=>$request->jenis,
            'hargajual'=>$request->hargajual
           
        ]);
        if(DB::table('laptops')){
            return redirect()->route('laptop.index')->with(['success'=>'Data berhasil disimpan']);
        }else{
            return redirect()->route('laptop.index')->with(['error'=>'Data gagal disimpan']);
        }
    }
    public function edit(Laptop $laptop)
    {
        return view('laptop.edit', compact('laptop'));
    }
    public function destroy($id)
    {
        $laptop = Laptop::findOrFail($id);

        $laptop->delete();
        if($laptop){
            //redirect dengan pesan sukses
            return redirect()->route('laptop.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('laptop.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
    public function update(Request $request, Laptop $laptop)
    {
    $this->validate($request, [
        'kode' => 'required',
        'seri' => 'required',
        'namalaptop' => 'required',
        'jenis' => 'required',
        'hargajual' => 'required'
        
        
    ]);
    //get data laptop by ID
 
    $laptop=Laptop::findOrFail($laptop->id); 
    $laptop->update([
        'kode'=>$request->kode,
        'seri'=>$request->seri,
        'namalaptop'=>$request->namalaptop,
        'jenis'=>$request->jenis ,
        'hargajual'=>$request->hargajual
        
       
    ]); 
    if($laptop){
    //redirect dengan pesan sukses
    return redirect()->route('laptop.index')->with(['success'=>'Data berhasil 
    disimpan']);
    }else{
        return redirect()->route('laptop.index')->with(['error'=>'Data gagal disimpan']);
    }
    }


}
