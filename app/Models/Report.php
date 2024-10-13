<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Report extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id', 'title', 'description', 'dataset_id', 'user_id', 'team_id'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($report) {
            $report->id = Str::uuid();
        });
    }
}
