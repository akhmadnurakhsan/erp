<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReversalReason extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function reversalReasonReversalReasonGroups()
    {
        return $this->hasMany(ReversalReasonReversalReasonGroup::class);
    }
}
