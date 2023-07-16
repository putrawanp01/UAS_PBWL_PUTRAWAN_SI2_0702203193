<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengkurban extends Model
{
    use HasFactory;
    protected $table = "tb_pengkurban";
    protected $primaryKey = "id_pengkurban";
    protected $guarded = [];
}
