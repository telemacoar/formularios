<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formgroup extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'name',
        'label',
        'order',
        'formsection_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'formsection_id' => 'integer',
    ];


    public function formfields()
    {
        return $this->hasMany(\App\Models\Formfield::class);
    }

    public function formsection()
    {
        return $this->belongsTo(\App\Models\Formsection::class);
    }
}
