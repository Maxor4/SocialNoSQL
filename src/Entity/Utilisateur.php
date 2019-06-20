<?php

namespace App\Entity;

use GraphAware\Neo4j\OGM\Annotations as OGM;
use GraphAware\Neo4j\OGM\Common\Collection;

/**
 * @OGM\Node(label="Utilisateur")
 */
class Utilisateur
{
    /**
     * @OGM\GraphId()
     */
    public $id;

    /**
     * @OGM\Property(type="string")
     */
    public $name;

    /**
     * @OGM\Property(type="int")
     */
    public $age;

    /**
     * @var Utilisateur[]|Collection
     *
     * @OGM\Relationship(type="AMI_AVEC", direction="OUTGOING", collection=true, mappedBy="amis", targetEntity="Utilisateur")
     */
    protected $amis;

    public function __construct()
    {
        $this->amis = new Collection();
    }

    // other code

    /**
     * @return Utilisateur[]|Collection
     */
    public function getMovies()
    {
        return $this->amis;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return Utilisateur[]|Collection
     */
    public function getAmis()
    {
        return $this->amis;
    }

    /**
     * @param Utilisateur[]|Collection $amis
     */
    public function setAmis($amis)
    {
        $this->amis = $amis;
    }
}