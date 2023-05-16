<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['question','service_id'];
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function documents(): BelongsToMany
    {
        return $this->belongsToMany(Document::class, 'questions_documents', 'question_id', 'document_id');
    }
}
