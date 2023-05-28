<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = ['name','description'];


    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(User::class,'employee_id');
    }
}
