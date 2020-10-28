<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'contact_id',
        'text'
    ];

    public function contact()
    {
        return $this->hasOne(Contact::class);
    }


}
