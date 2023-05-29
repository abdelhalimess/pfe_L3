<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Question extends Model
{
    use HasFactory;
    use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;


    protected $fillable = ['content', 'service_id'];

    public function getParentKeyName()
    {
        return 'question_id';
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function appointment(): HasOne
    {
        return $this->HasOne(Appointment::class);
    }

    public function documents(): BelongsToMany
    {
        return $this->belongsToMany(Document::class, 'questions_documents', 'question_id', 'document_id');
    }

    public function children()
    {
        return $this->hasMany(Question::class, 'question_id')->with('children');
    }
}
