<?php

namespace AIProject\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exercise_score
 *
 * @ORM\Table(name="exercise_score")
 * @ORM\Entity(repositoryClass="AIProject\CoreBundle\Repository\Exercise_scoreRepository")
 */
class Exercise_score
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
     * @var int
     *
     * @ORM\Column(name="Exercise_ID", type="integer")
     */
    private $exerciseID;


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
     * Set exerciseID
     *
     * @param integer $exerciseID
     * @return Exercise_score
     */
    public function setExerciseID($exerciseID)
    {
        $this->exerciseID = $exerciseID;

        return $this;
    }

    /**
     * Get exerciseID
     *
     * @return integer 
     */
    public function getExerciseID()
    {
        return $this->exerciseID;
    }
}
