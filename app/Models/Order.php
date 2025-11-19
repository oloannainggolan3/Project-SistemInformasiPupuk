<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    protected $fillable = [
        'order_number',
        'user_id',
        'village_office',
        'items',
        'total_amount',
        'status',
        'confirmed_by_user',
        'rejection_reason'
    ];

    protected $casts = [
        'items' => 'array',
        'total_amount' => 'decimal:2',
        'confirmed_by_user' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Relasi ke User
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope - hanya pesanan yang dikonfirmasi
     */
    public function scopeConfirmed($query)
    {
        return $query->where('confirmed_by_user', true);
    }

    /**
     * Scope - filter by status
     */
    public function scopeByStatus($query, $status)
    {
        if ($status && $status !== 'all') {
            return $query->where('status', $status);
        }
        return $query;
    }

    /**
     * Scope - search by name or order number
     */
    public function scopeSearch($query, $search)
    {
        if ($search) {
            return $query->where(function($q) use ($search) {
                $q->where('order_number', 'like', "%{$search}%")
                  ->orWhereHas('user', function($userQuery) use ($search) {
                      $userQuery->where('nama_lengkap', 'like', "%{$search}%");
                  });
            });
        }
        return $query;
    }

    /**
     * Get formatted total amount
     */
    public function getFormattedTotalAttribute()
    {
        return 'Rp ' . number_format($this->total_amount, 0, ',', '.');
    }

    /**
     * Get status badge color
     */
    public function getStatusColorAttribute()
    {
        return match($this->status) {
            'Pending' => 'gray',
            'Processing' => 'purple',
            'Ready' => 'lightgreen',
            'Completed' => 'green',
            'Rejected' => 'red',
            default => 'gray'
        };
    }

    /**
     * Generate order number
     */
    public static function generateOrderNumber()
    {
        $year = date('Y');
        $lastOrder = self::whereYear('created_at', $year)
            ->orderBy('id', 'desc')
            ->first();
        
        $nextNumber = $lastOrder ? (intval(substr($lastOrder->order_number, -3)) + 1) : 1;
        
        return sprintf('ORD-%s-%03d', $year, $nextNumber);
    }
}
