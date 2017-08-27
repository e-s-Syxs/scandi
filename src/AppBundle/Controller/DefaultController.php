<?php

namespace AppBundle\Controller;

use AppBundle\TaskThreeLogic\Entity\CdDvd;
use AppBundle\TaskThreeLogic\Entity\Furniture;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="task-one")
     *
     */
    public function taskOneAction()
    {
        //TODO task 1
    }

    /**
     * @Route("/two", name="task-two")
     *
     */
    public function taskTwoAction()
    {
        //TODO task 2
    }

    /**
     * @Route("/three", name="task-three")
     *
     * @param Request $request
     */
    public function taskThreeSaveFurnitureAction(Request $request)
    {
        $table =   new Furniture('GoldTrim', 50, '200x200x100', 'wood');
        $metallicaTopHits = new CdDvd('top', 20, 700, 'nuclear');

//        $this->container->get('save.furniture.service')->saveFurniture($table);
//

        dump($table);
        dump($metallicaTopHits);die;
    }
}
