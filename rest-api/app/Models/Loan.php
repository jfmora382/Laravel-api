<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = ['date_In_loan', 'date_Fin_loan', 'status_loan', 'employee_id', 'product_id', 'observations', 'stock_loan' ];


    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
