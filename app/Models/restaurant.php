<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    use HasFactory;
    protected $table = 'restaurants';
    protected $fillable = [
        'name',
        'owner_id',
        'open',
        'close',
        'multi_location'
    ];
}
