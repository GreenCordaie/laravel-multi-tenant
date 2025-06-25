<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Stancl\Tenancy\Database\Concerns\BelongsToTenant;

class ReturnReason extends Model
{
    use HasFactory, BelongsToTenant;

    protected $fillable = ['reason', 'tenant_id'];
}