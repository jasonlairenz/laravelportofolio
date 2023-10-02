<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat extends Model
{
    use HasFactory;
    protected $table ="riwayat";
    protected $fillable = ['judul', 'tipe', 'tgl_mulai', 'tgl_akhir', 'info1', 'info2', 'info3', 'isi'];

    protected $appends = ['tgl_mulai_format', 'tgl_akhir_format'];

    public function getTglMulaiFormatAttribute(){
        return Carbon::parse($this->attributes['tgl_mulai'])->translatedFormat('d F Y');
    }

    public function getTglAkhirFormatAttribute(){
        if($this->attributes['tgl_akhir']){
            return Carbon::parse($this->attributes['tgl_akhir'])->translatedFormat('d F Y');
        }
        else{
            return 'Present';
        }

    }
}
