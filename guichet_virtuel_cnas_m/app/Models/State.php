<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{
    protected $table = 'states';

    protected $fillable = ['name','code'];

    public function communes(): HasMany
    {
        return $this->hasMany(Commune::class);
    }

    
}
