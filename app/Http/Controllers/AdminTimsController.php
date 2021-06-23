<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tim;


class AdminTimsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')){
            $tim = Tim::where('nama', 'LIKE', '%'.$request->cari.'%')->get();
        } else {
            $tim = Tim::all();
            
        }
        return view('admintim/dashboardtim', compact('tim'));
    }
    // public function indextour(Request $request)
    // {
    //     if($request->has('cari')){
    //         $tournament = Tournament::where('nama', 'LIKE', '%'.$request->cari.'%')->get();
    //     } else {
    //         $tournament = Tournament::all();
            
    //     }
    //     return view('admintim/dashboardtour', compact('tournament'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admintim/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $request->validate([
            'nama'=>'required',
            'ket' =>'required',
            'tgldota'=>'required',
            'tourdota'=>'required',
            'posdota'=>'required',
            'haddota'=>'required',
            'tglcs'=>'required',
            'tourcs'=>'required',
            'poscs'=>'required',
            'hadcs'=>'required',
            'fb'=>'required',
            'twt' =>'required',
            'ig' =>'required',
            'yt' =>'required',
            'gambar' =>'required',
            
            
        ]);

        $tim = new Tim;
        $tim->nama = $request->nama;
        $tim->ket = $request->ket;
        $tim->tgldota =$request->tgldota ;
        $tim->tourdota = $request->tourdota ;
        $tim->posdota = $request->posdota ;
        $tim->haddota = $request->haddota ;
        $tim->tglcs = $request->tglcs ;
        $tim->tourcs = $request->tourcs ;
        $tim->poscs = $request->poscs ;
        $tim->hadcs = $request->hadcs ;
        $tim->fb = $request->fb;
        $tim->twt = $request->twt;
        $tim->ig = $request->ig;
        $tim->yt = $request->yt;
        // $tim->gambar = $request->gambar;

        if($request->hasFile('gambar')){
            $request->file('gambar')->move('uploads/tim', $request->file('gambar')->getClientOriginalName());
            $tim->gambar=$request->file('gambar')->getClientOriginalName();
        }
        $tim->save();
        // Tim::create($request->all());

        return redirect()->back()->withSuccess('data berhasil ditambah');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tim $tim)
    {
        return view('admintim/edit', compact('tim'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tim $tim)
    {
        $request->validate([
            'nama'=>'required',
            'ket' =>'required',
            'tgldota'=>'required',
            'tourdota'=>'required',
            'posdota'=>'required',
            'haddota'=>'required',
            'tglcs'=>'required',
            'tourcs'=>'required',
            'poscs'=>'required',
            'hadcs'=>'required',
            'fb'=>'required',
            'twt' =>'required',
            'ig' =>'required',
            'yt' =>'required',
            // 'gambar' =>'required',
        ]);

        $gambar = $tim->gambar;
        if($request->gambar != null ){
            $gambar = $request->gambar;
        }
        
        Tim::where('id', $tim->id)
            ->update([
            'nama'=> $request->nama,
            'ket' => $request->ket,
            'tgldota' => $request->tgldota,
            'tourdota' => $request->tourdota,
            'posdota' => $request->posdota,
            'haddota' => $request->haddota,
            'tglcs' => $request->tglcs,
            'tourcs' => $request->tourcs,
            'poscs' => $request->poscs,
            'hadcs' => $request->hadcs,
            'fb'=> $request->fb,
            'twt' => $request->twt,
            'ig' => $request->ig,
            'yt' => $request->yt,
            'gambar' => $gambar,
            ]);
            
            if($request->hasFile('gambar')){
                $request->file('gambar')->move('uploads/tim', $request->file('gambar')->getClientOriginalName());
                $tim->gambar=$request->file('gambar')->getClientOriginalName();
                $tim->save();
            }

            return redirect('/dashboardtim')->with('status', 'data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tim $tim)
    {
        Tim::destroy($tim->id);
        return redirect('/dashboardtim')->with('status', 'data berhasil dihapus!');
    }
}
