<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PartnerFunctionGroup extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function partnerFunctionPartnerFunctionGroups()
    {
        return $this->hasMany(PartnerFunctionPartnerFunctionGroup::class);
    }

    public function businessPartnerRoles()
    {
        return $this->hasMany(BusinessPartnerRole::class);
    }
}
