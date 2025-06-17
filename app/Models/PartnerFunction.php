<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PartnerFunction extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function partnerFunctionPartnerFunctionGroups()
    {
        return $this->hasMany(PartnerFunctionPartnerFunctionGroup::class);
    }
}
