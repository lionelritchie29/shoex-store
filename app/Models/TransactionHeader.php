<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address',
        'postal_code',
        'card_mm',
        'card_yy',
        'card_cvv',
        'card_number'
    ];

    public function detail(){
        return $this->hasOne(TransactionDetail::class, 'transaction_id', 'id');
    }
}
