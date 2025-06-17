<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionType extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }
}
