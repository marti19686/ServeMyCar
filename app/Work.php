<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'title',
        'client_name',
        'client_contact',
        'description'
    ];

    /**
     * Zlecenie ma swojego autora
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

