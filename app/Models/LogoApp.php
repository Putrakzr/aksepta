<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogoApp extends Model
{
    protected $table = 'logo_app';

    protected $fillable = [
        'file_name',
        'file_path',
        'mime_type',
    ];

    /**
     * The table associated with the model does not have Laravel's default timestamps.
     * We disable them and let the database handle the updated_at column.
     */
    public $timestamps = false;
}
