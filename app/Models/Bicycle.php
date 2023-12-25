<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bicycle extends Model
{
    use HasFactory;

    protected $table = 'bicycles'; // Specify the table name
    protected $primaryKey = 'id'; // Specify the primary key
    public $timestamps = true; // Enable timestamps (created_at and updated_at columns)

    // Define fillable or guarded attributes if needed
    protected $fillable = [
        'name',
        'logo',
        'desc',
        'harga',
        // Add other columns as needed
    ];

    

    // If you want to disable timestamps, you can set public $timestamps = false;

    // Add any additional model logic or relationships here
}
