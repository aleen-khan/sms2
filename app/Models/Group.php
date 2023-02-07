<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\GroupMember;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
       'group_name',
       'created_by'
    ];

    public function members()
    {
        return $this->hasMany(GroupMember::class, 'group_id');
    }
}
