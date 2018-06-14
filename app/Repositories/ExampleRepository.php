<?php

namespace App\Repositories;

use App\Models\Example;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ExampleRepository
 * @package App\Repositories
 * @version June 14, 2018, 7:17 pm UTC
 *
 * @method Example findWithoutFail($id, $columns = ['*'])
 * @method Example find($id, $columns = ['*'])
 * @method Example first($columns = ['*'])
*/
class ExampleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'campo1',
        'campo2'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Example::class;
    }
}
