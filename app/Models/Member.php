<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name',
        'username',
        'phone',
        'date_of_birth',
        'join_date',
        'status',
    ];

    // Menentukan apakah anggota aktif
    public function isActive(): bool
    {
        return $this->status === 'active';
    }
}
