<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tim;
use App\Laptop;
// use App\Legion;
// use App\Acer;
// use App\Rog;
// use App\Gigabyte;
// use App\Omen;
// use App\Msi;

class PagesController extends Controller
{
    public function beranda()
    {
        $laptop = Laptop::paginate(4);
        $tim = Tim::paginate(1);
        return view('beranda', compact('laptop','tim'));
    }
    public function sejarah()
    {
        return view('sejarah');
    }
    public function tentang()
    {
        return view('tentang');
    }
    //Menampilkan tim
    public function indextim()
    {
        $tim = Tim::all();
        return view('tim', compact('tim'));
    }

    //dashboard

    public function indexdashmain()
    {
        return view('dashboard');
    }

    //Menampilkan Masing-masing laptop di stiap brand
    //Laptop Acer
    public function indexacer()
    {
        $laptop = Laptop::where('nama', 'LIKE', '%acer%')->get();
        return view('acer/acer', compact('laptop'));
    }
    //Laptop Asus
    public function indexasus()
    {
        $laptop = Laptop::where('nama', 'LIKE', '%asus%')->get();
        return view('asus/asus', compact('laptop'));
    }
    //Laptop Gigabyte
    public function indexgiga()
    {
        $laptop = Laptop::where('nama', 'LIKE', '%gigabyte%')->get();
        return view('gigabyte/gigabyte', compact('laptop'));
    }
    //Laptop Hp
    public function indexhp()
    {
        $laptop = Laptop::where('nama', 'LIKE', '%hp%')->get();
        return view('hp/hp', compact('laptop'));
    }
    //Laptop Lenovo
    public function indexleno()
    {
        $laptop = Laptop::where('nama', 'LIKE', '%lenovo%')->get();
        return view('lenovo/legion', compact('laptop'));
    }
    //Laptop MSI
    public function indexmsi()
    {
        $laptop = Laptop::where('nama', 'LIKE', '%msi%')->get();
        return view('msi/msi', compact('laptop'));
    }

    //Menampilkan Game
    public function indexpubg()
    {
        $laptop = Laptop::take(3)->orderBy('markfire','DESC')->get();
        return view('game/pubg', compact('laptop'));
    }
    public function indexforza()
    {
        $laptop = Laptop::take(3)->orderBy('markfire','DESC')->get();
        return view('game/forza', compact('laptop'));
    }
    public function indexgtav()
    {
        $laptop = Laptop::take(3)->orderBy('markfire','DESC')->get();
        return view('game/gtav', compact('laptop'));
    }
    public function indexfifa19()
    {
        $laptop = Laptop::take(3)->orderBy('markfire','DESC')->get();
        return view('game/fifa19', compact('laptop'));
    }
}
