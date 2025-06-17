<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReversalReasonReversalReasonGroup extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function reversalReasonGroup()
    {
        return $this->belongsTo(ReversalReasonGroup::class);
    }

    public function reversalReason()
    {
        return $this->belongsTo(ReversalReason::class);
    }
}
