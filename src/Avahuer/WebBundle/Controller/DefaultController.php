<?php

namespace Avahuer\WebBundle\Controller;

use Avahuer\WebBundle\Form\Type\ContactoType;
use Doctrine\ORM\Query\Expr;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route(path="/", name="avahuer_web_homepage")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
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

    /**
     * @Route(path="/contacto", name="avahuer_web_contacto")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contactoAction(Request $request)
    {
        $form = $this->createForm(new ContactoType(), null, array());

        return $this->render('AvahuerWebBundle:Contacto:contacto.html.twig', array(
                'active_menu' => 'contacto',
                'form' => $form->createView(),
            ));
    }

    /**
     * @Route(path="/empresa", name="avahuer_web_empresa")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function empresaAction(Request $request)
    {
        return $this->render('AvahuerWebBundle:Empresa:empresa.html.twig', array(
                'active_menu' => 'empresa',
            ));
    }

    /**
     * @Route(path="/clientes", name="avahuer_web_clientes")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function clientesAction(Request $request)
    {
        return $this->render('AvahuerWebBundle:Empresa:clientes.html.twig', array(
                'active_menu' => 'empresa',
            ));
    }

    /**
     * @Route(path="/certificaciones", name="avahuer_web_certificaciones")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function certificacionesAction(Request $request)
    {
        return $this->render('AvahuerWebBundle:Empresa:certificaciones.html.twig', array(
                'active_menu' => 'empresa',
            ));
    }

    /**
     * @Route(path="/mision&vision", name="avahuer_web_misionvision")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function misionVisionAction(Request $request)
    {
        return $this->render('AvahuerWebBundle:Empresa:mision-vision.html.twig', array(
                'active_menu' => 'empresa',
            ));
    }

    /**
     * @Route(path="/servicios", name="avahuer_web_servicios")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function serviciosAction(Request $request)
    {
        return $this->render('AvahuerWebBundle:Servicios:servicios.html.twig', array(
                'active_menu' => 'servicios',
            ));
    }

    /**
     * @Route(path="/oficiales", name="avahuer_web_oficiales")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function oficialesAction(Request $request)
    {
        return $this->render('AvahuerWebBundle:Oficiales:oficiales.html.twig', array(
                'active_menu' => 'oficiales',
            ));
    }
}
