<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance_record extends Model
{
    use HasFactory;
    protected $perPage = 10;
    protected $fillable = [
        'entry_date',
        'delivery_date',
        'current_mileage',
        'work_description',
        'parts_cost',
        'labor_cost',
        'total_cost',
        'vehicle_id',
        'client_id',
        'technician_id',
    ];
    public function vehicle ()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function client ()
    {
        return $this->belongsTo(Client::class);
    }

    public function technician ()
    {
        return $this->belongsTo(Technican::class);
    }
}
