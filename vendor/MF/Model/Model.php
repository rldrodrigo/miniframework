<?php
//Implementa to código em comum nas Models
namespace MF\Model;

abstract class Model
{
    protected $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }
}
