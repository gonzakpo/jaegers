<?php

namespace Sistema\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use MWSimple\Bundle\AdminCrudBundle\Entity\BaseFile;

/**
 * ImagenAlbum
 *
 * @ORM\Table(name="imagen_album")
 * @ORM\Entity
 *
 * @author Gonzalo Alonso <gonkpo@gmail.com>
 */
class ImagenAlbum extends BaseFile
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;
    
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Album", inversedBy="imagenes")
     * @ORM\JoinColumn(name="album_id", referencedColumnName="id")
     */
    private $album;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        $this->uploadDir = 'uploads/imagen_album';
        return $this->uploadDir;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return ImagenAlbum
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set album
     *
     * @param \Sistema\FrontBundle\Entity\Album $album
     * @return ImagenAlbum
     */
    public function setAlbum(\Sistema\FrontBundle\Entity\Album $album = null)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return \Sistema\FrontBundle\Entity\Album 
     */
    public function getAlbum()
    {
        return $this->album;
    }
}
