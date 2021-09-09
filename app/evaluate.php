<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evaluate extends Model
{
    //Tạo liên kết tới bản quảng cáo
    protected $table="evaluates";
    //tắt bật chế độ tự động quản lý 'created' và 'update at'
    public $timestamps=true;
}
