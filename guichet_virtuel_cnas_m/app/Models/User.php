<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Cache;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Cache as FacadesCache;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'address', 'email', 'password', 'username', 'telephone', 'commune_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function structure()
    {
        return $this->belongsTo(Structure::class);
    }

    public function leavedocs()
    {
        return $this->hasMany(LeaaveDoc::class);
    }

    public function isOnline()
    {
        return FacadesCache::has('user-is-online-' . $this->id);
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
    public function service(): HasOne
    {
        return $this->hasOne(Service::class);
    }
}
