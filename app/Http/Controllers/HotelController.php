<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;


class HotelController extends Controller
{
    public function index(){
        $data = Hotel::all();
        return view('home',compact('data'));
    }
    public function tambah(){
        return view('tambah');
    }
    public function insert(Request $request)
    {
        $data = Hotel::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('img/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('home')->with('success ',' Data Berhasi di Tambahkan. ');
    }
    public function detail($id){
        $data = Hotel::find($id);
        return view('detail', compact('data'));
    }
    public function show($id){
        $data = Hotel::find($id);

        return view('edit', compact('data'));
    }
    public function Update(Request $request, $id){
        $data = Hotel::find($id); 
        $data->update($request->all()); 

        if($request->hasFile('image')){
            $request->file('image')->move('img/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        
        return redirect()->route('home')->with('success ',' Data Berhasil Di Update . ');
    }
    public function delete($id){
        $data = Hotel::find($id); 
        $data->delete();   

        return redirect()->route('home')->with('success ',' Data Berhasil Di Hapus . ');
    }
}
