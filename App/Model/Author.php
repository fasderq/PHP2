<?php

namespace App\Model;

use App\Model;

/**
 * Class Author
 * @package App\Model
 *
 * @property string $table
 * @property int $id
 * @property string $name
 */
class Author
    extends Model

{

    public static $table = 'authors';
    public $name;

}

?>


