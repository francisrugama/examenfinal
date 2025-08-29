<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technican_assignment extends Model
{
    use HasFactory;
    protected $perPage = 10;
    protected $fillable = [
        'assignment_date',
        'task_status',
        'performance_rating',
        'tools_used',
        'task_type',
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
