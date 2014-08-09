<?php

namespace Sistema\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Sistema\FrontBundle\Entity\Album;
use Sistema\FrontBundle\Form\FindAlbumType;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/", name="mapa")
     * @Template()
     */
    public function mapaAction()
    {
    	$request = $this->getRequest();
    	$album = new Album();

    	$form = $this->createCreateForm($album);
    	$form->handleRequest($request);

    	$direcciones = array();

    	if ($request->getMethod() == 'POST') {
    		if ($form->isValid()) {
    			$data = $form->getData();
    			$direcciones[0] = $data->getLugar();
    			$em = $this->getDoctrine()->getManager();
    			// echo $lat1;echo $lat2;var_dump($data);die;
		        $albumes = $em->getRepository('SistemaFrontBundle:Album')->findAlbumes($data);
		        foreach ($albumes as $value) {
		        	$direcciones[] = $value['lugar'];
		        }
    		} else {
    			$direcciones = array("Resistencia, Chaco, Chaco, Argentina");
    		}
    	} else {
    		$direcciones = array("Resistencia, Chaco, Chaco, Argentina");
    	}

        return array(
        	'form'        => $form->createView(),
        	'direcciones' => $direcciones,
        );
    }

    /**
    * Creates a form to create a entity.
    * @param array $config
    * @param $entity The entity
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm($entity)
    {
        $form = $this->createForm(new FindAlbumType(), $entity, array(
            'action' => $this->generateUrl('mapa'),
            'method' => 'POST',
        ));

        $form
            ->add(
                'find', 'submit', array(
                'label'              => 'Buscar',
                'attr'               => array('class' => 'btn btn-success col-lg-2')
                )
            )
        ;

        return $form;
    }
}
