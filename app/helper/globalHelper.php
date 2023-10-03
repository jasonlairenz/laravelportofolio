<?php

use App\Models\metadata;

function getMeta_value($meta_key)
{
    $data = metadata::where('meta_key', $meta_key)->first();
    if ($data) {
        return $data->meta_value;
    }
}

function set_about_nama($nama)
{
    $arr = explode(" ", $nama); //pisahkan nama per kata
    $kataakhir = end($arr); // ambil kata terakhir yang ingin beda style
    $boldname = "<span class='text-primary'>$kataakhir</span>"; // simpan kata teralhir yang mau beda style
    array_pop($arr); // ubah isi arr jadi index pertama saja
    $namadepan = implode(" ", $arr);
    return $namadepan . " " . $boldname;
}

function setlist_award($award){
    $award = str_replace("<ul>",'<ul class="fa-ul mb-0">',$award);
    $award = str_replace("<li>", '<li><span class="fa-li"><i class="fas fa-trophy text-warning"></i></span></li>', $award);
    return $award;
}

function setlist_workflow($workflow)
{
    $workflow = str_replace("<ul>", '<ul class="fa-ul mb-0">', $workflow);
    $workflow = str_replace("<li>", '<li><span class="fa-li"><i class="fas fa-check"></i></span></li>', $workflow);
    return $workflow;
}
