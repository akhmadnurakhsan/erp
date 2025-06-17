<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provinsi extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function kabupatens()
    {
        return $this->hasMany(Kabupaten::class);
    }

    public function allKodepos()
    {
        return $this->hasMany(Kodepos::class);
    }
}
