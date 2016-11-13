<?php

class Relationships extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=10, nullable=false)
     */

	public $user_id;
    public $contact1_id;
    public $contact2_id;
    public $relationship;

    public function getSource()
    {
        return 'relationships';
    }

    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }
}
