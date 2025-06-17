<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatusStatusGroup extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function statusGroup()
    {
        return $this->belongsTo(StatusGroup::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
