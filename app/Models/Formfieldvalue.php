<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formfieldvalue extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'formvalue_id',
        'formfield_id',
        'value',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'formvalue_id' => 'integer',
        'formfield_id' => 'integer',
    ];


    public function formvalue()
    {
        return $this->belongsTo(\App\Models\Formvalue::class);
    }

    public function formfield()
    {
        return $this->belongsTo(\App\Models\Formfield::class);
    }
}
