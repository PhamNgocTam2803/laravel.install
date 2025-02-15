<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;
    public function accounts(): BelongsToMany
    {
        return $this->belongsToMany(Account::class, 'role_accounts', 'role_id', 'account_id');
    }
}
