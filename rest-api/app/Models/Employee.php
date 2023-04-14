<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name','lastname', 'email', 'phone', 'area_id', 'position_id' ];

    public function areas()
    {
        return $this->belongsTo(Area::class);
    }

    public function positions()
    {
        return $this->belongsTo(Position::class);
    }
}
