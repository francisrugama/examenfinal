<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
     use HasFactory;
    protected $perPage = 10;
    protected $fillable = [
        'owner_name',
        'owner_phone',
        'owner_address',
        'owner_mail',
        'model',
        'brand',
        'license_plate',
    ];
    public function vehicle_histories ()
    {
        return $this->hasMany(Vehicle_history::class);
    }

    public function service_history ()
    {
        return $this->hasOne(Service_history::class);
    }

    public function appointment ()
    {
        return $this->hasOne(Appointment::class);
    }

    public function maintenances_record ()
    {
        return $this->hasMany(Maintenance_record::class);
    }
}
