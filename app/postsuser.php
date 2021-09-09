<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postsuser extends Model
{
    //Tạo liên kết tới bản quảng cáo
    protected $table="postsuser";
    //tắt bật chế độ tự động quản lý 'created' và 'update at'
    public $timestamps=true;
}
