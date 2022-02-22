<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formvalue extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'formschema_id',
        'date',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'formschema_id' => 'integer',
        'date' => 'datetime',
        'user_id' => 'integer',
    ];


    public function formfieldvalues()
    {
        return $this->hasMany(\App\Models\Formfieldvalue::class);
    }

    public function formschema()
    {
        return $this->belongsTo(\App\Models\Formschema::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
