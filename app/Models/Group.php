<?php

namespace App\Models;

use App\Models\User;
use App\Models\Nurse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'group_name',
        'selected',
    ];
    
    public function nurses(): HasMany
    {
        // A group can have many nurses, connected by the group_id column on the nurses table.
        return $this->hasMany(Nurse::class, 'group_id');
    }

    public function wards(): BelongsTo
    {
        // A group belongs to one ward, connected by the group_id column on the nurses table.
        return $this->belongsTo(Ward::class, 'group_id');
    }

     public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
