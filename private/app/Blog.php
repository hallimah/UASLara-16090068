<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Blog extends Model
{
    use SoftDeletes;
    protected $dates = ['delete_at'];


    protected $table = "artikel_tbl";
    protected $fillable = [
     'judul', 'kategori', 'isi_berita', 'foto'
    ];
}
