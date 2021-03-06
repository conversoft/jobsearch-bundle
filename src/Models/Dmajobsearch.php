<?php
namespace Dma\Jobsearch\Models;
/**
 * Created By Conversoft Generator
 * https://conversoft.rocks
 * https://github.com/conversoft
 * @author Thomas Lonnemann <thomas@conversoft.rocks>
**/
use Illuminate\Database\Eloquent\Model as Model;

class Dmajobsearch extends Model
{
    public $timestamps = false;
    protected $hidden = ['tstamp'];
    protected $table = 'tl_dmajobsearch';

    /**
     * Set the table associated with the model.
     *
     * @param  string  $table
     * @return void
     */
    public function __construct(array $attributes = [], $table = null)
    {
        if ($table) {
            $this->setTable($table);
        }

        parent::__construct($attributes);
    }

    public function setTable($table)
    {
        $this->table = $table;
    }

}
