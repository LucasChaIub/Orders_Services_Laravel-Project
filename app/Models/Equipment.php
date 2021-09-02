<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'model',
        'imei',
        'tested',
        'storage',
        'password',
        'accessories',
        'backup',
        'state',
        'problems_found',
        'problems_reported',
        'comments',
        'equipment_type_id',
        'brand_id',
        'service_order_id'
    ];
}
