<?php

namespace BasicPHPUnitTest\car;

class driver
{
    private $firstname;

    private $lastname;

    private $id;

    public function __construct(string $firstname, string $lastname, string $id)
    {
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
        $this->setId($id);
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFullname()
    {
        return $this->firstname.' '.$this->lastname."\n";
    }

    public function getFullnamewithid()
    {
        return $this->firstname.' '.$this->lastname.' '.$this->id."\n";
    }
}
