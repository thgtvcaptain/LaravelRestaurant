<?php

namespace App\Models;

use App\Enums\TableLocation as EnumsTableLocation;
use App\Enums\TableStatus as EnumsTableStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TableLocation;
use TableStatus;

class Table extends Model
{
    use HasFactory;

    protected $fillable = ['name','guest_number','status', 'location'];

    protected $casts = [
        'status' => EnumsTableStatus::class,
        'location' => EnumsTableLocation::class
    ];

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }
}
