<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Asal;
use App\Models\tujuan;

class Penumpang extends Model
{
    use HasFactory;
    // memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['nama_penumpang','kereta_id','kelas','tgl','jml_penumpang'];
    // memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['nama_penumpang','kereta_id','kelas','tgl','jml_penumpang'];
    // mencatat waktu pembuatan dan update otomatis
    public $timestime = true;

    //membuat relasi one to many
    public function keretas()
    {
        // data model "Author" bisa memiliki banyak data
        // dari model "Book" melalui fk "author_id"
        return $this->belongsTo('App\Models\Kereta', 'kereta_id');
    }
    public function transaksis()
    {
        // data model "Author" bisa memiliki banyak data
        // dari model "Book" melalui fk "author_id"
        return $this->hasMany('App\Models\Transaksi', 'penumpang_id');
    }
}
