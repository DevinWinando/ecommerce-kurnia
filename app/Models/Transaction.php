<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'transaction_date',
        'total_amount',
        'status',
        'notes',
        'payment_method',
        'transaction_number',
        'shipping_address',
        'shipping_cost',
        'tracking_number',
    ];

    /**
     * Get the user that owns the transaction.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the items associated with the transaction.
     */
    public function items()
    {
        return $this->hasMany(TransactionItem::class);
    }
}
