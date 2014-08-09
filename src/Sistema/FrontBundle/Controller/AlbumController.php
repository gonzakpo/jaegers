<?php

namespace Sistema\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use MWSimple\Bundle\AdminCrudBundle\Controller\DefaultController as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sistema\FrontBundle\Entity\Album;
use Sistema\FrontBundle\Form\AlbumType;
use Sistema\FrontBundle\Form\AlbumFilterType;

/**
 * Album controller.
 * @author Nombre Apellido <name@gmail.com>
 *
 * @Route("/admin/album")
 */
class AlbumController extends Controller
{
    /**
     * Configuration file.
     */
    protected $config = array(
        'yml' => 'Sistema/FrontBundle/Resources/config/Album.yml',
    );

    /**
     * Lists all Album entities.
     *
     * @Route("/", name="admin_album")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $this->config['filterType'] = new AlbumFilterType();
        $response = parent::indexAction();

        return $response;
    }

    /**
     * Creates a new Album entity.
     *
     * @Route("/", name="admin_album_create")
     * @Method("POST")
     * @Template("SistemaFrontBundle:Album:new.html.twig")
     */
    public function createAction()
    {
        $this->config['newType'] = new AlbumType();
        $response = parent::createAction();

        return $response;
    }

    /**
     * Displays a form to create a new Album entity.
     *
     * @Route("/new", name="admin_album_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $this->config['newType'] = new AlbumType();
        $response = parent::newAction();

        return $response;
    }

    /**
     * Finds and displays a Album entity.
     *
     * @Route("/{id}", name="admin_album_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $response = parent::showAction($id);

        return $response;
    }

    /**
     * Displays a form to edit an existing Album entity.
     *
     * @Route("/{id}/edit", name="admin_album_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $this->config['editType'] = new AlbumType();
        $response = parent::editAction($id);

        return $response;
    }

    /**
     * Edits an existing Album entity.
     *
     * @Route("/{id}", name="admin_album_update")
     * @Method("PUT")
     * @Template("SistemaFrontBundle:Album:edit.html.twig")
     */
    public function updateAction($id)
    {
        $this->config['editType'] = new AlbumType();
        $response = parent::updateAction($id);

        return $response;
    }

    /**
     * Deletes a Album entity.
     *
     * @Route("/{id}", name="admin_album_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $response = parent::deleteAction($id);

        return $response;
    }

    /**
     * Autocomplete a Album entity.
     *
     * @Route("/autocomplete-forms/get-imagenes", name="Album_autocomplete_imagenes")
     */
    public function getAutocompleteImagenAlbum()
    {
        $options = array(
            'repository' => "SistemaFrontBundle:ImagenAlbum",
            'field'      => "id",
        );
        $response = parent::getAutocompleteFormsMwsAction($options);

        return $response;
    }
}