<?php

namespace App\Models;

use App\Traits\Multitenancy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    use Multitenancy;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function formatAmount($amount)
    {
        return "Rs." . $amount;
    }

    public function scopeApproved($query)
    {
        return $query->where('approved', true);
    }
    public function scopeSearch($query, $title)
    {
        if ($title == null) {
            return $query;
        }
        return $query->where('title', 'like', '%' . $title . '%');
    }
}
