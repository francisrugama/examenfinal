<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spare_used extends Model
{
    use HasFactory;
    protected $perPage = 10;
    protected $fillable = [
        'part_code',
        'brand',
        'warranty_period',
        'supplier_name',
        'maintenance_record_id',
    ];

    public function maintenance_record ()
    {
        return $this->belongsTo(Maintenance_record::class);
    }
}
