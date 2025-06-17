<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TitleGroup extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function titleTitleGroups()
    {
        return $this->hasMany(TitleTitleGroup::class);
    }

    public function businessPartnerCategories()
    {
        return $this->hasMany(BusinessPartnerCategory::class);
    }
}
