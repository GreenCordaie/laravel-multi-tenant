<?php

namespace App\Models;

// --- AJOUTS ---
use App\Enums\OrderStatus;
use App\Enums\PaymentStatus;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// --- FIN AJOUTS ---

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // --- AJOUT : Le trait pour la multitenancy ---
  

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // --- AJOUTS ---
        'tenant_id',
        'return_reason_id',
        // --- FIN AJOUTS ---

        'order_number',
        'user_id',
        'total',
        'status',
        'notes',
        'billing_name',
        'billing_email',
        'billing_phone',
        'billing_address',
        'billing_city',
        'billing_state',
        'billing_country',
        'billing_zipcode',
        'shipping_name',
        'shipping_address',
        'shipping_city',
        'shipping_state',
        'shipping_country',
        'shipping_zipcode',
        'payment_method',
        'payment_status',
        'paid_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        // --- AJOUTS : Le "casting" des Enums ---
        'status' => OrderStatus::class,
        'payment_status' => PaymentStatus::class,
        // --- FIN AJOUTS ---
        'paid_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    // --- AJOUT : La relation pour la raison du retour ---
    public function returnReason(): BelongsTo
    {
        return $this->belongsTo(ReturnReason::class);
    }
}