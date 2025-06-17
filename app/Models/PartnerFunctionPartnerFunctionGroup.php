<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PartnerFunctionPartnerFunctionGroup extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function partnerFunctionGroup()
    {
        return $this->belongsTo(PartnerFunctionGroup::class);
    }

    public function partnerFunction()
    {
        return $this->belongsTo(PartnerFunction::class);
    }
}
