<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formfieldoption extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'endpoint',
        'formfield_id',
    ];
    protected $with = ['formfieldoptionitems'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'formfield_id' => 'integer',
    ];


    public function formfieldoptionitems()
    {
        return $this->hasMany(\App\Models\Formfieldoptionitem::class);
    }

    public function formfield()
    {
        return $this->belongsTo(\App\Models\Formfield::class);
    }
}
