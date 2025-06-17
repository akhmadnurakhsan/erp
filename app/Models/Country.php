<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function provinsis()
    {
        return $this->hasMany(Provinsi::class);
    }

    public function allKodepos()
    {
        return $this->hasMany(Kodepos::class);
    }
}
