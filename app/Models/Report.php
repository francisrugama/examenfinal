<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
     use HasFactory;
    protected $perPage = 10;
    protected $fillable = [
        'filter_type',
        'generated_date',
        'content_summary',
        'generated_by',
        'start_date',
        'end_date',
        'output_format',
        'report_title',
        'archived',
        'total_records',
    ];
    public function service_history ()
    {
        return $this->hasMany(Service_history::class);
    }
}
