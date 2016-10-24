<?php

namespace App\Model;

use App\Model;

/**
 * Class Article
 * @package App\Model
 *
 * @property int $id
 * @property string $header
 * @property string $text
 * @property int $author_id
 */
class Article
    extends Model

{

    public static $table = 'worldtoday';
    public $header;
    public $text;
    public $author_id;

    /**
     * @param $key
     * @return bool|null
     */
    public function __get($key)
    {
        switch ($key) {

            case ('author'):

                    return Author::findById($this->author_id);

                break;

            default:

                return null;

        }
    }

    /**
     * @param $key
     * @return bool
     */
    public function __isset($key)
    {
        switch ($key) {
            case ('author'):

                return !empty($this->author_id);

                break;

            default:

                return false;

        }

    }

}

?>



