<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formfield extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'label',
        'code',
        'mandatory',
        'enabled',
        'validate',
        'order',
        'formgroup_id',
        'formfieldtype_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'mandatory' => 'boolean',
        'enabled' => 'boolean',
        'formgroup_id' => 'integer',
        'formfieldtype_id' => 'integer',
    ];


    public function formfieldoptions()
    {
        return $this->hasMany(\App\Models\Formfieldoption::class);
    }

    public function formfieldevents()
    {
        return $this->hasMany(\App\Models\Formfieldevent::class);
    }

    public function formgroup()
    {
        return $this->belongsTo(\App\Models\Formgroup::class);
    }

    public function formfieldtype()
    {
        return $this->belongsTo(\App\Models\Formfieldtype::class);
    }
}
