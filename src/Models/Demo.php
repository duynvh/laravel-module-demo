<?php
/**
 * Created by PhpStorm.
 * User: macos
 * Date: 6/15/19
 * Time: 18:46
 */

namespace Module\Demo\Models;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    /**
     * @var string
     */
    protected $table = 'demo';
    /**
     * @var array
     */
    protected $fillable = ['name',];
}