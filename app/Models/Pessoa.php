<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pessoa
 * @package App\Models
 * @version June 6, 2018, 8:50 pm UTC
 *
 * @property string nome
 * @property integer age
 */
class Pessoa extends Model
{
    use SoftDeletes;

    public $table = 'pessoas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'age'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nome' => 'string',
        'age' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required'
    ];

    
}
