<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Test extends Jam_Model {

    static public function initialize(Jam_Meta $meta)
    {
        $meta
            ->fields(array(
                'id' => Jam::field('primary'),
                'name' => Jam::field('string'),
            ));

    }
}
