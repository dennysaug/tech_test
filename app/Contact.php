<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'company_id',
        'name',
        'phone'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
