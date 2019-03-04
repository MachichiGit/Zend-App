<?php
namespace Application\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
/**
 * This class represents a website.
 * @ORM\Entity
 * @ORM\Table(name="website")
 */
class Website
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id")
     * @ORM\Column(type="integer")
     * @ORM\OneToMany(targetEntity="URLs", mappedBy="website")
     */
    protected $id;

    /** 
    * @ORM\Column(name="naam") 
    */
    protected $naam;

    /** 
    * @ORM\Column(name="url") 
    */
    protected $url;


  // Returns ID of this website.
  public function getId() 
  {
    return $this->id;
  }

  // Sets ID of this website.
  public function setId($id) 
  {
    $this->id = $id;
  }

  // Returns Naam of this website.
  public function getNaam() 
  {
    return $this->naam;
  }

  // Sets Naam of this website.
  public function setNaam($naam) 
  {
    $this->naam = $naam;
  }

  // Returns Naam of this website.
  public function getUrl() 
  {
    return $this->url;
  }

  // Sets Naam of this website.
  public function setUrl($url) 
  {
    $this->url = $url;
  }
}