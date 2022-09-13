<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class PermissionsForUser extends Model
{
    use HasFactory;

    protected $fillable = ['permission_name'];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'user_has_permissions');
    }
}
