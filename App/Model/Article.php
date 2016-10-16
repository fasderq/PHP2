<?php

namespace App\Model;

require_once __DIR__ . '/../Model.php';

use App\Model;

class Article
    extends Model

{

    public static $table = 'worldtoday';
    public $header;
    public $text;

}

?>



