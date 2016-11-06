<?php

namespace AIProject\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table(name="course")
 * @ORM\Entity(repositoryClass="AIProject\CoreBundle\Repository\CourseRepository")
 */
class Course
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
     * @var int
     *
     * @ORM\Column(name="Teacher_ID", type="integer")
     */
    private $teacherID;

    /**
     * @var int
     *
     * @ORM\Column(name="Category_ID", type="integer")
     */
    private $categoryID;

    /**
     * @var string
     *
     * @ORM\Column(name="Exercise", type="string", length=255)
     */
    private $exercise;


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
     * @return Course
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
     * Set teacherID
     *
     * @param integer $teacherID
     * @return Course
     */
    public function setTeacherID($teacherID)
    {
        $this->teacherID = $teacherID;

        return $this;
    }

    /**
     * Get teacherID
     *
     * @return integer 
     */
    public function getTeacherID()
    {
        return $this->teacherID;
    }

    /**
     * Set categoryID
     *
     * @param integer $categoryID
     * @return Course
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;

        return $this;
    }

    /**
     * Get categoryID
     *
     * @return integer 
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Set exercise
     *
     * @param string $exercise
     * @return Course
     */
    public function setExercise($exercise)
    {
        $this->exercise = $exercise;

        return $this;
    }

    /**
     * Get exercise
     *
     * @return string 
     */
    public function getExercise()
    {
        return $this->exercise;
    }
}
