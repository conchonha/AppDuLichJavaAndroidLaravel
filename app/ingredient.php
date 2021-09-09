<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingredient extends Model
{
    //Tạo liên kết tới bản quảng cáo
    protected $table="ingredient";
    //tắt bật chế độ tự động quản lý 'created' và 'update at'
    //public $timestamps=false;
}
