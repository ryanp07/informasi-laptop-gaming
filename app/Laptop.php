<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $fillable = ['nama','vga','cpu','os','layar','hdd','ram','batre','berat','harga','logo', 'markfire',
    'marktime', 'gambar','gam_lep1','gam_lep2','gam_lep3','gam_gem1','gam_gem2','gam_gem3','gam_gem4','port1','port2',
    'port3'];

}
