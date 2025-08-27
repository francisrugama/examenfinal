<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $perPage = 10;
    protected $fillable = [
        'code_appointments',
        'creation_date',
        'notes',
        'confirmed',
        'technican_id',
        'client_id',
        'vehicle_id',
    ];

    public function technican ()
    {
        return $this->belongsTo(Technican::class);
    }

    public function client ()
    {
        return $this->belongsTo(Client::class);
    }

    public function vehicle ()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
