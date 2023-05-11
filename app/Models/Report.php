<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'colored' => 'json',
        'photo_external_damage' => 'json',
        'photo_internal_damage' => 'json',
        'photo_external' => 'json',
        'photo_internal' => 'json',
        'equipment' => 'json',
        'functions_check' =>  'boolean'

    ];
}
