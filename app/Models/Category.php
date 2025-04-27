<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category'; // Explicitly set the table name

    protected $fillable = [
        'name'
    ];
}
