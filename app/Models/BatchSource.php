<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BatchSource extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function numberRange()
    {
        return $this->belongsTo(NumberRange::class);
    }
}
