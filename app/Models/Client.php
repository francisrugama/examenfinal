<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
     use HasFactory;
    protected $perPage = 10;
    protected $fillable = [
        'name',
        'age',
        'birth_date',
        'mail',
        'sex',
        'phone_number',
        'card',
        'ethnicity',
        'nationality',
        'code',
    ];
    public function maintenances_record ()
    {
        return $this->hasMany(Maintenance_record::class);
    }

    public function vehicle_history ()
    {
        return $this->hasOne(Vehicle_history::class);
    }

    public function appointment ()
    {
        return $this->hasOne(Appointment::class);
    }
}
