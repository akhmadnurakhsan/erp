<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubModule extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
