<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service_historie extends Model
{
    use HasFactory;
    protected $perPage = 10;
    protected $fillable = [
        'service_date',
        'mileage_service',
        'total_cost',
        'vehicle_id',
        'maintenance_record_id',
        'report_id',
    ];
    public function vehicle ()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function maintenance_record ()
    {
        return $this->belongsTo(Maintenance_record::class);
    }

    public function report ()
    {
        return $this->belongsTo(Report::class);
    }
}
