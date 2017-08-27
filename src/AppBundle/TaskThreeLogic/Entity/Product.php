<?php
/**
 * Created by PhpStorm.
 * User: osboxes
 * Date: 8/19/17
 * Time: 10:20 PM
 */

namespace AppBundle\TaskThreeLogic\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Product
 * @package AppBundle\TaskThreeLogic\Entity
 */
abstract class Product
{

    /**
     * @ORM\Column(type="string")
     * @ORM\Title
     */
    protected $title = null;
    /**
     * @ORM\Column(type="integer")
     * @ORM\Title
     */
    protected $price = null;

    public function __construct(string $title, int $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    abstract public function getName();
    abstract public function getTitle();
    abstract public function getPrice();
    abstract public function getAllAttributes();
}