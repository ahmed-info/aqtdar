<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    function setAttachmentsAttribute($valu) {
        $this->attributes['attachments'] = json_encode($value);
    }
}
