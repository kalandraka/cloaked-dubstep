<?php

namespace Avahuer\WebBundle\Controller;

use Avahuer\WebBundle\Form\Type\ContactoType;
use Doctrine\ORM\Query\Expr;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        /*$em = $this->get('doctrine.orm.entity_manager');
        $usuario = $this->get('security.context')->getToken()->getUser();

        $queryBuilder = $em->createQueryBuilder();
        $clienteDQL = $queryBuilder
            ->select('c.id')
            ->from('PlanillasEstructuraBundle:Cliente', 'c')
            ->leftJoin('c.usuarios', 'u')
            ->where($queryBuilder->expr()->eq(':usuario','u'))
            ->getDQL();

        $queryBuilder = $em->createQueryBuilder();
        $empleados = $queryBuilder
            ->select('e')
            ->from('PlanillasCoreBundle:CEmpleado','e')
            ->leftJoin('e.puesto', 'p')
            ->join('p.cliente', 'cliente')
            ->where($queryBuilder->expr()->in('cliente',$clienteDQL))
            ->setParameters(array(
                    'usuario' => $usuario,
                ))
            ->getQuery()
            ->getResult();*/

        return $this->render('AvahuerWebBundle:Default:index.html.twig', array(
                'active_menu' => 'home',
            ));
    }

    public function contactoAction(Request $request)
    {
        $form = $this->createForm(new ContactoType(), null, array());

        return $this->render('AvahuerWebBundle:Contacto:contacto.html.twig', array(
                'active_menu' => 'contacto',
                'form' => $form->createView(),
            ));
    }

    public function empresaAction(Request $request)
    {
        return $this->render('AvahuerWebBundle:Empresa:empresa.html.twig', array(
                'active_menu' => 'empresa',
            ));
    }


}
