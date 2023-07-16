<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Kurban extends Model
{
    use HasFactory;
    protected $table = "tb_kurban";
    protected $primaryKey = "id_kurban";
    protected $guarded = [];
    
        
    public function alldata(){
        return DB::table('tb_kurban')
        ->leftJoin('tb_pengkurban', 'tb_pengkurban.id_pengkurban', '=', 'tb_kurban.kurban_id_pengkurban')
        ->get();
    }
}
