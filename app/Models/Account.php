<?php

namespace App\Models;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Account extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'birth_day',
        'phone_number',
        'password'
    ];
    protected $hidden = [
        'password',
    ];

    public function  roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'role_accounts', 'account_id', 'role_id');
    }
    
}
