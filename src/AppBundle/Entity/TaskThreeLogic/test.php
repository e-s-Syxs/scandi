<?php

namespace AppBundle\Entity\TaskThreeLogic;

use Doctrine\ORM\Mapping as ORM;

/**
 * test
 *
 * @ORM\Table(name="task_three_logictest")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaskThreeLogic\testRepository")
 */
class test
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

