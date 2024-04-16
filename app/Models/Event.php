<?php

namespace App\Models;

use App\Traits\Multitenancy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use tizis\laraComments\Contracts\ICommentable;
use tizis\laraComments\Traits\Commentable;

class Event extends Model implements HasMedia, ICommentable
{
    use HasFactory;
    use Multitenancy;
    use InteractsWithMedia;
    use Commentable;

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

    public function getDisplayImage()
    {
        if ($this->hasMedia() && $this->getFirstMediaUrl() !== null) {
            return $this->getFirstMediaUrl();
        }
        return asset('images/cause1.jpg');
    }

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}
