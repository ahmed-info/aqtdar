<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attachment;

class Join extends Model
{
    use HasFactory;
    protected $guarded = [];
        protected $hidden = [
        'updated_at',
    ];

     public function attachs()
    {
        return $this->hasMany(Attachment::class);
    }

}
