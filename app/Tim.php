<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    protected $fillable = ['nama','ket','fb','twt','ig','yt','gambar','tgldota','tourdota',
                        'posdota','haddota','tglcs','tourcs','poscs','hadcs'];

}
