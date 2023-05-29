<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['appointment_datetime', 'user_id', 'status','employee_id','question_id'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(User::class,'employee_id');
    }
    
    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class, 'question_id');
    }

}
