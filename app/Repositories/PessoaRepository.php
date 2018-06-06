<?php

namespace App\Repositories;

use App\Models\Pessoa;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PessoaRepository
 * @package App\Repositories
 * @version June 6, 2018, 8:50 pm UTC
 *
 * @method Pessoa findWithoutFail($id, $columns = ['*'])
 * @method Pessoa find($id, $columns = ['*'])
 * @method Pessoa first($columns = ['*'])
*/
class PessoaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'age'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pessoa::class;
    }
}
