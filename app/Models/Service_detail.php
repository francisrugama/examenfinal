<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_detail extends Model
{
    use HasFactory;
    protected $perPage = 10;
    protected $fillable = [
        'service_type',
        'tool_used',
        'warranty_service',
        'observations',
        'technician_id',
        'maintenance_record_id',
    ];

    public function technician ()
    {
        return $this->belongsTo(Technican::class);
    }

    public function maintenance_record ()
    {
        return $this->belongsTo(Maintenance_record::class);
    }
}
