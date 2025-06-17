<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NumberRange extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function nrObject()
    {
        return $this->belongsTo(NrObject::class);
    }

    public function documentTypes()
    {
        return $this->hasMany(DocumentType::class);
    }

    public function materialTypes()
    {
        return $this->hasMany(MaterialType::class);
    }

    public function batchSources()
    {
        return $this->hasMany(BatchSource::class);
    }
}
