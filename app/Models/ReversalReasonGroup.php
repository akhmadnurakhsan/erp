<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReversalReasonGroup extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function reversalReasonReversalReasonGroups()
    {
        return $this->hasMany(ReversalReasonReversalReasonGroup::class);
    }

    public function documentTypes()
    {
        return $this->hasMany(DocumentType::class);
    }
}
