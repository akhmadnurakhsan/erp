<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NrObject extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function numberRanges()
    {
        return $this->hasMany(NumberRange::class);
    }
}
