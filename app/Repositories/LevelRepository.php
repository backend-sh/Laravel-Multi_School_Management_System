<?php

namespace App\Repositories;

use App\Models\Level;
use App\Repositories\BaseRepository;

/**
 * Class LevelRepository
 * @package App\Repositories
 * @version September 23, 2019, 10:05 am UTC
*/

class LevelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'level',
        'course_id',
        'level_description'
    ];

    protected $primaryKey = 'level_id';
    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Level::class;
    }
}
