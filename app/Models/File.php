<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        // Listen for the 'deleting' event
        static::deleting(function ($file) {
            // Delete the physical file
            Storage::delete(str_replace('/storage/', '/', $file->path));
        });
    }
}
