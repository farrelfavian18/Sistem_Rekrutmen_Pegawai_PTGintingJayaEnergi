<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jabatan;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pelamar extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'nama_lengkap',
    //     'jabatan'
    //   ];
    protected $guarded = []; 
    //protected $table = 'pelamar';
    protected $date =['created_at'];
    public function jabatans()
    {
        return $this->belongsTo(Jabatan::class,'id_jabatan');
        // 'id_jabatan','id')->withDefault('-');
    }
}
