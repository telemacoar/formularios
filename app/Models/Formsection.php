<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formsection extends Model
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
        'formschema_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'formschema_id' => 'integer',
    ];


    public function formgroups()
    {
        return $this->hasMany(\App\Models\Formgroup::class);
    }

    public function formschema()
    {
        return $this->belongsTo(\App\Models\Formschema::class);
    }
}
