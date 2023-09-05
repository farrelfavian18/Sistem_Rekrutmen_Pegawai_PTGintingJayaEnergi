<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Pelamar;
use App\Models\Jabatan;

class Interview extends Model
{
    use HasFactory;
    protected $guarded =[];
    // protected $fillable = [
    //     'id_pelamar',
    //     'id_jabatan',
    //     'nama_lengkap',
    //   ];
    public function jabatans()
    {
       // return $this->hasMany(Jabatan::class,'id_jabatan','id')->withDefault('-');
        // return $this->belongsTo(Jabatan::class,'id');
        return $this->belongsTo(Jabatan::class,'id_jabatan','id');
    }

    public function pelamars()
    {
        return $this->hasMany(Pelamar::class,'id_pelamar');
        //return $this->hasMany(Pelamar::class,'id_pelamar','id')->withDefault('-');
    }
}
