<?php

namespace Sistema\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use MWSimple\Bundle\AdminCrudBundle\Controller\DefaultController as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\FrontBundle\Entity\PayULatam;
use Sistema\FrontBundle\Form\PayULatamType;
use Sistema\FrontBundle\Form\PayULatamFilterType;

/**
 * PayULatam controller.
 * @author Nombre Apellido <name@gmail.com>
 *
 * @Route("/admin/payulatam")
 */
class PayULatamController extends Controller
{
    /**
     * Configuration file.
     */
    protected $config = array(
        'yml' => 'Sistema/FrontBundle/Resources/config/PayULatam.yml',
    );


    /**
     * Service pay
     *
     * @Route("/service-response", name="service_response")
     * @Method("GET")
     * @Template()
     *
     * @return $message
     */
    public function serviceResponseAction()
    {
        $message = 'La operación se realizó exitosamente';
        return array(
            'message' => $message
        );
    }

    /**
     * Lists all PayULatam entities.
     *
     * @Route("/", name="admin_payulatam")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $this->config['filterType'] = new PayULatamFilterType();
        $response = parent::indexAction();

        return $response;
    }

    /**
     * Creates a new PayULatam entity.
     *
     * @Route("/", name="admin_payulatam_create")
     * @Method("POST")
     * @Template("SistemaFrontBundle:PayULatam:new.html.twig")
     */
    public function createAction()
    {
        $this->config['newType'] = new PayULatamType();

        $response = parent::createAction();

        return $response;
    }

    /**
     * Displays a form to create a new PayULatam entity.
     *
     * @Route("/new", name="admin_payulatam_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $this->config['newType'] = new PayULatamType();
        $config = $this->getConfig();
        $entity = new $config['entity']();
        $form   = $this->createFormPay($config, $entity);

        // remove the form to return to the view
        unset($config['newType']);

        $response = array(
            'config'     => $config,
            'entity'     => $entity,
            'form'       => $form->createView(),
        );

        return $response;
    }

    /**
     * Finds and displays a PayULatam entity.
     *
     * @Route("/{id}", name="admin_payulatam_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $response = parent::showAction($id);

        return $response;
    }

    /**
     * Displays a form to edit an existing PayULatam entity.
     *
     * @Route("/{id}/edit", name="admin_payulatam_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $this->config['editType'] = new PayULatamType();
        $response = parent::editAction($id);

        return $response;
    }

    /**
     * Edits an existing PayULatam entity.
     *
     * @Route("/{id}", name="admin_payulatam_update")
     * @Method("PUT")
     * @Template("SistemaFrontBundle:PayULatam:edit.html.twig")
     */
    public function updateAction($id)
    {
        $this->config['editType'] = new PayULatamType();
        $response = parent::updateAction($id);

        return $response;
    }

    /**
     * Deletes a PayULatam entity.
     *
     * @Route("/{id}", name="admin_payulatam_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $response = parent::deleteAction($id);

        return $response;
    }

    /**
    * Creates a form to create a entity.
    * @param array $config
    * @param $entity The entity
    * @return \Symfony\Component\Form\Form The form
    */
    private function createFormPay($config, $entity)
    {
        $url     = $this->generateUrl('service_response');
        $baseUrl = $this->generateUrl('admin_album_new');
        $entity->setResponseUrl($url, 
            array(
                'code' => '1',
            ),
            true
        ); 
        $entity->setUrlOrigen($baseUrl);    
        $form = $this->createForm($config['newType'], $entity, array(
            'action' => 'https://stg.gateway.payulatam.com/ppp-web-gateway/',
            'method' => 'POST',
        ));

        /*form*/
            //->add(
                //'save', 'submit', array(
                //'translation_domain' => 'MWSimpleAdminCrudBundle',
                //'label'              => 'views.new.save',
                //'attr'               => array('class' => 'btn btn-success col-lg-2')
                //)
            //)
            //->add(
                //'saveAndAdd', 'submit', array(
                //'translation_domain' => 'MWSimpleAdminCrudBundle',
                //'label'              => 'views.new.saveAndAdd',
                //'attr'               => array('class' => 'btn btn-primary col-lg-2 col-lg-offset-1')
                //)
            //)
        /*;*/

        return $form;
    }
}
