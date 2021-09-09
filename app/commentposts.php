<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commentposts extends Model
{
    //Tạo liên kết tới bản quảng cáo
    protected $table="commentposts";
    //tắt bật chế độ tự động quản lý 'created' và 'update at'
    public $timestamps=true;
}
