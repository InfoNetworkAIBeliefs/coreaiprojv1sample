<?php

namespace AIProject\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exercise
 *
 * @ORM\Table(name="exercise")
 * @ORM\Entity(repositoryClass="AIProject\CoreBundle\Repository\ExerciseRepository")
 */
class Exercise
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Tutorial", type="string", length=255)
     */
    private $tutorial;

    /**
     * @var string
     *
     * @ORM\Column(name="UnitTesting", type="string", length=255)
     */
    private $unitTesting;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Exercise
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set tutorial
     *
     * @param string $tutorial
     * @return Exercise
     */
    public function setTutorial($tutorial)
    {
        $this->tutorial = $tutorial;

        return $this;
    }

    /**
     * Get tutorial
     *
     * @return string 
     */
    public function getTutorial()
    {
        return $this->tutorial;
    }

    /**
     * Set unitTesting
     *
     * @param string $unitTesting
     * @return Exercise
     */
    public function setUnitTesting($unitTesting)
    {
        $this->unitTesting = $unitTesting;

        return $this;
    }

    /**
     * Get unitTesting
     *
     * @return string 
     */
    public function getUnitTesting()
    {
        return $this->unitTesting;
    }
}
