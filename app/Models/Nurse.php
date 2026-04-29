<?php

namespace App\Models;

use App\Models\User;
use App\Models\Group;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nurse extends Model
{     
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nurse_first_name',
        'nurse_last_name',
        'nurse_email',
        'nurse_age',
        'nurse_image',
        'nurse_licence_id'
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function group(): BelongsTo
    {
        // A nurse belongs to a group, connected by the group_id column on the nurses table.
        return $this->belongsTo(Group::class, 'group_id');
    }
}
