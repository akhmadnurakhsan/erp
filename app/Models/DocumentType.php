<?php

namespace App\Models;

use App\Traits\LogTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentType extends Model
{
    use SoftDeletes;
    use LogTrait;

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function numberRange()
    {
        return $this->belongsTo(NumberRange::class);
    }

    public function statusGroup()
    {
        return $this->belongsTo(StatusGroup::class);
    }

    public function reversalDocumentType()
    {
        return $this->belongsTo(
            DocumentType::class,
            'reversal_document_type_id'
        );
    }

    public function documentTypes()
    {
        return $this->hasMany(DocumentType::class, 'reversal_document_type_id');
    }

    public function reversalReasonGroup()
    {
        return $this->belongsTo(ReversalReasonGroup::class);
    }

    public function transactionTypes()
    {
        return $this->hasMany(TransactionType::class);
    }
}
