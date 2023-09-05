<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pelamar;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jabatan extends Model
{
    use HasFactory;
    protected $guarded =[];
    //protected $table = 'jabatan';
    protected $date =['created_at'];
    public function pelamars():HasMany
    {
        return $this->hasMany(Pelamar::class,'id_jabatan')->withDefault('-');
    }
    public function interview()
    {
        return $this->hasManyThrough(Interview::class, Pelamar::class);
    }
}
