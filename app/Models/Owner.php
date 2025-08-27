<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
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
    public function vehicle_history ()
    {
        return $this->hasMany(Vehicle_history::class);
    }
}
