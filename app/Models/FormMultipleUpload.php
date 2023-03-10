<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormMultipleUpload extends Model
{
    use HasFactory;

    protected $fillable = [
        'filename',
        'caption'
    ];

    public $table = 'form_multiple_upload';
}