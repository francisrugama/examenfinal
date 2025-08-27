<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technican extends Model
{
     use HasFactory;
    protected $perPage = 10;
    protected $fillable = [
        'name',
        'phone',
        'mail',
        'hire_date',
        'status',
        'years_experience',
        'certifications',
        'hourly_rate',
        'photo_url',
        'services_count',
    ];
    public function appointment ()
    {
        return $this->hasMany(Appointment::class);
    }

    public function maintenances_record ()
    {
        return $this->hasOne(Maintenances_record::class);
    }

    public function service_detail ()
    {
        return $this->hasOne(Service_detail::class);
    }

    public function technician_assignment ()
    {
        return $this->hasOne(Technician_assignment::class);
    }
}
