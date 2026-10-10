<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerEnquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_name',
        'work_email',
        'organisation',
        'role',
        'number_of_pharmacists',
        'expected_start_month',
        'support_need',
        'phone',
        'status',
        'contacted_at',
    ];

    protected $casts = [
        'contacted_at' => 'datetime',
    ];

    public function scopeNew($query)
    {
        return $query->where('status', 'new');
    }
}
