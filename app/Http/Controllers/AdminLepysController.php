<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laptop;
use App\Admin;

class AdminLepysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if($request->has('cari')){
            $laptop = Laptop::where('nama', 'LIKE', '%'.$request->cari.'%')->get();
        } else {
            $laptop = Laptop::all();
            
        }
        return view('adminlepy/dashboardlepy', compact('laptop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlepy/create');
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
            'cpu' =>'required',
            'vga'=>'required',
            'os' =>'required',
            'layar' =>'required',
            'port1' =>'required',
            'port2' =>'required',
            'port3' =>'required',
            'hdd' =>'required',
            'ram' =>'required',
            'batre' =>'required',
            'berat' =>'required',
            'markfire' => 'required',
            'marktime' => 'required', 
            'harga' =>'required',
            'logo' =>'required',
            'gambar' =>'required',
            'gam_lep1'=>'required',
            'gam_lep2'=>'required',
            'gam_lep3'=>'required',
            'gam_gem1'=>'required',
            'gam_gem2'=>'required',
            'gam_gem3'=>'required',
            'gam_gem4'=>'required',
        ]);

        $laptop = new Laptop;
        $laptop->nama = $request->nama;
        $laptop->vga = $request->vga;
        $laptop->cpu = $request->cpu;
        $laptop->os = $request->os;
        $laptop->layar = $request->layar;
        $laptop->port1 = $request->port1;
        $laptop->port2 = $request->port2;
        $laptop->port3 = $request->port3;
        $laptop->hdd = $request->hdd;
        $laptop->ram = $request->ram;
        $laptop->batre = $request->batre;
        $laptop->berat = $request->berat;
        $laptop->markfire = $request->markfire;
        $laptop->marktime = $request->marktime;
        $laptop->harga = $request->harga;
        // $laptop->logo = $request->logo;
        // $laptop->gambar = $request->gambar;
        // $laptop->gam_lep1 = $request->gam_lep1;
        // $laptop->gam_lep2 = $request->gam_lep2;
        // $laptop->gam_lep3 = $request->gam_lep3;
        // $laptop->gam_gem1 = $request->gam_gem1;
        // $laptop->gam_gem2 = $request->gam_gem2;
        // $laptop->gam_gem3 = $request->gam_gem3;
        // $laptop->gam_gem4 = $request->gam_gem4;

        if($request->hasFile('logo')){
            $request->file('logo')->move('uploads/laptop', $request->file('logo')->getClientOriginalName());
            $laptop->logo=$request->file('logo')->getClientOriginalName();
        }
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('uploads', $request->file('gambar')->getClientOriginalName());
            $laptop->gambar=$request->file('gambar')->getClientOriginalName();
        }
        if($request->hasFile('gam_lep1')){
            $request->file('gam_lep1')->move('uploads/laptop', $request->file('gam_lep1')->getClientOriginalName());
            $laptop->gam_lep1=$request->file('gam_lep1')->getClientOriginalName();
        }
        if($request->hasFile('gam_lep2')){
            $request->file('gam_lep2')->move('uploads/laptop', $request->file('gam_lep2')->getClientOriginalName());
            $laptop->gam_lep2=$request->file('gam_lep2')->getClientOriginalName();
        }
        if($request->hasFile('gam_lep3')){
            $request->file('gam_lep3')->move('uploads/laptop', $request->file('gam_lep3')->getClientOriginalName());
            $laptop->gam_lep3=$request->file('gam_lep3')->getClientOriginalName();
        }
        if($request->hasFile('gam_gem1')){
            $request->file('gam_gem1')->move('uploads/fps', $request->file('gam_gem1')->getClientOriginalName());
            $laptop->gam_gem1=$request->file('gam_gem1')->getClientOriginalName();
        }
        if($request->hasFile('gam_gem2')){
            $request->file('gam_gem2')->move('uploads/fps', $request->file('gam_gem2')->getClientOriginalName());
            $laptop->gam_gem2=$request->file('gam_gem2')->getClientOriginalName();
        }
        if($request->hasFile('gam_gem3')){
            $request->file('gam_gem3')->move('uploads/fps', $request->file('gam_gem3')->getClientOriginalName());
            $laptop->gam_gem3=$request->file('gam_gem3')->getClientOriginalName();
        }
        if($request->hasFile('gam_gem4')){
            $request->file('gam_gem4')->move('uploads/fps', $request->file('gam_gem4')->getClientOriginalName());
            $laptop->gam_gem4=$request->file('gam_gem4')->getClientOriginalName();
        }
        $laptop->save();
        

        // Laptop::create($request->all());

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
    public function edit(Laptop $laptop)
    {
        return view('adminlepy/edit', compact('laptop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laptop $laptop)
    {
        $request->validate([
            'nama'=>'required',
            'cpu' =>'required',
            'vga'=>'required',
            'os' =>'required',
            'layar' =>'required',
            'port1' =>'required',
            'port2' =>'required',
            'port3' =>'required',
            'hdd' =>'required',
            'ram' =>'required',
            'batre' =>'required',
            'berat' =>'required',
            'markfire' => 'required',
            'marktime' => 'required', 
            'harga' =>'required',
            // 'logo' =>'required',
            // 'gambar' =>'required',
            // 'gam_lep1'=>'required',
            // 'gam_lep2'=>'required',
            // 'gam_lep3'=>'required',
            // 'gam_gem1'=>'required',
            // 'gam_gem2'=>'required',
            // 'gam_gem3'=>'required',
            // 'gam_gem4'=>'required',
        ]);
        
        $logo = $laptop->logo;
        if($request->logo != null){
            $logo = $request->logo;
        }
        $gambar = $laptop->gambar;
        if($request->gambar != null){
            $gambar = $request->gambar;
        }
        $gam_lep1 = $laptop->gam_lep1;
        if($request->gam_lep1 != null){
            $gam_lep1 = $request->gam_lep1;
        }
        $gam_lep2 = $laptop->gam_lep2;
        if($request->$gam_lep2 != null){
            $gam_lep2 = $request->$gam_lep2;
        }
        $gam_lep3 = $laptop->gam_lep3;
        if($request->gam_lep3 != null){
            $gam_lep3 = $request->gam_lep3;
        }
        $gam_gem1 = $laptop->gam_gem1;
        if($request->gam_gem1 != null){
            $gam_gem1 = $request->gam_gem1;
        }
        $gam_gem1 = $laptop->gam_gem1;
        if($request->gam_gem1 != null){
            $gam_gem1 = $request->gam_gem1;
        }
        $gam_gem2 = $laptop->gam_gem2;
        if($request->gam_gem2 != null){
            $gam_gem2 = $request->gam_gem2;
        }
        $gam_gem3 = $laptop->gam_gem3;
        if($request->gam_gem3 != null){
            $gam_gem3 = $request->gam_gem3;
        }
        $gam_gem4 = $laptop->gam_gem4;
        if($request->gam_gem4 != null){
            $gam_gem4 = $request->gam_gem4;
        }

        Laptop::where('id', $laptop->id)
            ->update([
                'nama' => $request->nama ,
                'cpu' => $request->cpu ,
                'vga' => $request->vga ,
                'os' => $request->os ,
                'layar' => $request->layar ,
                'port1' => $request->port1 ,
                'port2' => $request->port2 ,
                'port3' => $request->port3 ,
                'hdd' => $request->hdd ,
                'ram' => $request->ram ,
                'batre' => $request->batre ,
                'berat' => $request->berat ,
                'markfire' => $request->markfire,
                'marktime' => $request->marktime, 
                'harga' => $request->harga ,
                'logo' => $logo,
                'gambar' => $gambar ,
                'gam_lep1' => $gam_lep1 ,
                'gam_lep2' => $gam_lep2 ,
                'gam_lep3' => $gam_lep3 ,
                'gam_gem1' => $gam_gem1 ,
                'gam_gem2' => $gam_gem2 ,
                'gam_gem3' => $gam_gem3 ,
                'gam_gem4' => $gam_gem4 ,
            ]);

            if($request->hasFile('logo')){
                $request->file('logo')->move('uploads/laptop', $request->file('logo')->getClientOriginalName());
                $laptop->logo=$request->file('logo')->getClientOriginalName();
                $laptop->save();
            }
            if($request->hasFile('gambar')){
                $request->file('gambar')->move('uploads', $request->file('gambar')->getClientOriginalName());
                $laptop->gambar=$request->file('gambar')->getClientOriginalName();
                $laptop->save();
            }
            if($request->hasFile('gam_lep1')){
                $request->file('gam_lep1')->move('uploads/laptop', $request->file('gam_lep1')->getClientOriginalName());
                $laptop->gam_lep1=$request->file('gam_lep1')->getClientOriginalName();
                $laptop->save();
            }
            if($request->hasFile('gam_lep2')){
                $request->file('gam_lep2')->move('uploads/laptop', $request->file('gam_lep2')->getClientOriginalName());
                $laptop->gam_lep2=$request->file('gam_lep2')->getClientOriginalName();
                $laptop->save();
            }
            if($request->hasFile('gam_lep3')){
                $request->file('gam_lep3')->move('uploads/laptop', $request->file('gam_lep3')->getClientOriginalName());
                $laptop->gam_lep3=$request->file('gam_lep3')->getClientOriginalName();
                $laptop->save();
                $laptop->save();
            }
            if($request->hasFile('gam_gem1')){
                $request->file('gam_gem1')->move('uploads/fps', $request->file('gam_gem1')->getClientOriginalName());
                $laptop->gam_gem1=$request->file('gam_gem1')->getClientOriginalName();
                $laptop->save();
            }
            if($request->hasFile('gam_gem2')){
                $request->file('gam_gem2')->move('uploads/fps', $request->file('gam_gem2')->getClientOriginalName());
                $laptop->gam_gem2=$request->file('gam_gem2')->getClientOriginalName();
                $laptop->save();
            }
            if($request->hasFile('gam_gem3')){
                $request->file('gam_gem3')->move('uploads/fps', $request->file('gam_gem3')->getClientOriginalName());
                $laptop->gam_gem3=$request->file('gam_gem3')->getClientOriginalName();
                $laptop->save();
            }
            if($request->hasFile('gam_gem4')){
                $request->file('gam_gem4')->move('uploads/fps', $request->file('gam_gem4')->getClientOriginalName());
                $laptop->gam_gem4=$request->file('gam_gem4')->getClientOriginalName();
                $laptop->save();
            }

            return redirect('/dashboardlepy')->with('status', 'data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laptop $laptop)
    {
        Laptop::destroy($laptop->id);
        return redirect('/dashboardlepy')->with('status', 'data berhasil dihapus!');
    }
}
