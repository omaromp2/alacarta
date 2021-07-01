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
        'multi_location',
    ];

    /**
     * Get all of the menuItems for the restaurant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menuItems()
    {
        return $this->hasMany(menu::class, 'rest_id', 'id');
    }
}
