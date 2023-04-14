<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class Profile extends Model
{
    protected $guarded = [];
    // use HasFactory;

    public function profileImage()
    {
        $imagePath = ($this->image) ?  $this->image : 'profile/V27P4zHd8nR9LCDAqWiQMTMy5eM2w85tDW4PnRx0.jpg';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
