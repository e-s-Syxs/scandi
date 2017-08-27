<?php
/**
 * Created by PhpStorm.
 * User: osboxes
 * Date: 8/20/17
 * Time: 10:10 PM
 */

namespace AppBundle\TaskThreeLogic\Storage;


use AppBundle\TaskThreeLogic\Entity\CdDvd;
use Doctrine\ORM\EntityManagerInterface;

final class CdDvdStorage
{
    private $doctrine = null;

    /**
     * CdDvdStorage constructor.
     * @param EntityManagerInterface $doctrine
     */
    public function __construct(EntityManagerInterface $doctrine)
    {
        $this->doctrine = $doctrine;

    }

    /**
     * @param CdDvd $cdDvd
     */
    public function save(CdDvd $cdDvd)
    {
        $this->doctrine->persist($cdDvd);
        $this->doctrine->flush();
    }
}