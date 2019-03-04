<?php
namespace Application\Model;

use Application\Model\Website;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Table(name="urls")
 * @ORM\Entity
 */
class URLs
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="urls", inversedBy="Website")
     * @ORM\JoinColumn(name="id", referencedColumnName="websiteId")
     */
    private $websiteId;

    /** 
    * @ORM\Column(name="url") 
    */
    protected $url;

    /** 
    * @ORM\Column(name="count") 
    */
    protected $count;

	public function getId() 
	{
		return $this->id;
	}

	public function setId($id) 
	{
		$this->id = $id;
	}

	public function getWebsiteId() 
	{
		return $this->websiteId;
	}

	public function setWebsiteId($id) 
	{
		$this->websiteId = $id;
	}

	public function getUrl() 
	{
		return $this->url;
	}

	public function setUrl($url) 
	{
		$this->url = $url;
	}

	public function getCount() 
	{
		return $this->count;
	}

	public function setCount($count) 
	{
		$this->count = $count;
	}
}