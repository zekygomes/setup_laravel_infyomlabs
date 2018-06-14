<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Example
 * @package App\Models
 * @version June 14, 2018, 7:17 pm UTC
 *
 * @property string campo1
 * @property string campo2
 */
class Example extends Model
{
    use SoftDeletes;

    public $table = 'examples';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'campo1',
        'campo2'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'campo1' => 'string',
        'campo2' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'campo1' => 'required',
        'campo2' => 'required'
    ];

    
}
