<?php

namespace Sistema\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sistema\FrontBundle\Entity\AlbumRepository")
 */
class Album
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
     * @ORM\Column(name="titulo", type="string", length=255)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", length=255)
     */
    private $lugar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="anio", type="date")
     */
    private $anio;

    /**
     *  @ORM\OneToMany(targetEntity="ImagenAlbum", mappedBy="album", cascade={"all"}, orphanRemoval=true)
     */
    private $imagenes;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->imagenes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Album
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set lugar
     *
     * @param string $lugar
     * @return Album
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return string 
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set anio
     *
     * @param \DateTime $anio
     * @return Album
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return \DateTime 
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Add imagenes
     *
     * @param \Sistema\FrontBundle\Entity\ImagenAlbum $imagenes
     * @return Album
     */
    public function addImagene(\Sistema\FrontBundle\Entity\ImagenAlbum $imagenes)
    {
        $this->imagenes[] = $imagenes;

        return $this;
    }

    /**
     * Remove imagenes
     *
     * @param \Sistema\FrontBundle\Entity\ImagenAlbum $imagenes
     */
    public function removeImagene(\Sistema\FrontBundle\Entity\ImagenAlbum $imagenes)
    {
        $this->imagenes->removeElement($imagenes);
    }

    /**
     * Get imagenes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImagenes()
    {
        return $this->imagenes;
    }
}
