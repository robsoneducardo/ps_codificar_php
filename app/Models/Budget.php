<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    protected $fillable = [
        'created',
        'seller_id',
        'budget_id',
        'description',
        'value',
    ];

    public function seller(){
        return $this->belongsTo(Seller::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public $timestamps = false;
}
