<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'brand', 'stock', 'status_st'];

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}
