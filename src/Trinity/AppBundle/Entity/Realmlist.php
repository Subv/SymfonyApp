<?php

namespace Trinity\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Realmlist
 *
 * @ORM\Table(name="realmlist")
 * @ORM\Entity
 */
class Realmlist
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="localAddress", type="string", length=255, nullable=false)
     */
    private $localaddress;

    /**
     * @var string
     *
     * @ORM\Column(name="localSubnetMask", type="string", length=255, nullable=false)
     */
    private $localsubnetmask;

    /**
     * @var integer
     *
     * @ORM\Column(name="port", type="smallint", nullable=false)
     */
    private $port;

    /**
     * @var boolean
     *
     * @ORM\Column(name="icon", type="boolean", nullable=false)
     */
    private $icon;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flag", type="boolean", nullable=false)
     */
    private $flag;

    /**
     * @var boolean
     *
     * @ORM\Column(name="timezone", type="boolean", nullable=false)
     */
    private $timezone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowedSecurityLevel", type="boolean", nullable=false)
     */
    private $allowedsecuritylevel;

    /**
     * @var float
     *
     * @ORM\Column(name="population", type="float", nullable=false)
     */
    private $population;

    /**
     * @var integer
     *
     * @ORM\Column(name="gamebuild", type="integer", nullable=false)
     */
    private $gamebuild;



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
     * Set name
     *
     * @param string $name
     * @return Realmlist
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Realmlist
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set localaddress
     *
     * @param string $localaddress
     * @return Realmlist
     */
    public function setLocaladdress($localaddress)
    {
        $this->localaddress = $localaddress;
    
        return $this;
    }

    /**
     * Get localaddress
     *
     * @return string 
     */
    public function getLocaladdress()
    {
        return $this->localaddress;
    }

    /**
     * Set localsubnetmask
     *
     * @param string $localsubnetmask
     * @return Realmlist
     */
    public function setLocalsubnetmask($localsubnetmask)
    {
        $this->localsubnetmask = $localsubnetmask;
    
        return $this;
    }

    /**
     * Get localsubnetmask
     *
     * @return string 
     */
    public function getLocalsubnetmask()
    {
        return $this->localsubnetmask;
    }

    /**
     * Set port
     *
     * @param integer $port
     * @return Realmlist
     */
    public function setPort($port)
    {
        $this->port = $port;
    
        return $this;
    }

    /**
     * Get port
     *
     * @return integer 
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set icon
     *
     * @param boolean $icon
     * @return Realmlist
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    
        return $this;
    }

    /**
     * Get icon
     *
     * @return boolean 
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set flag
     *
     * @param boolean $flag
     * @return Realmlist
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;
    
        return $this;
    }

    /**
     * Get flag
     *
     * @return boolean 
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set timezone
     *
     * @param boolean $timezone
     * @return Realmlist
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    
        return $this;
    }

    /**
     * Get timezone
     *
     * @return boolean 
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set allowedsecuritylevel
     *
     * @param boolean $allowedsecuritylevel
     * @return Realmlist
     */
    public function setAllowedsecuritylevel($allowedsecuritylevel)
    {
        $this->allowedsecuritylevel = $allowedsecuritylevel;
    
        return $this;
    }

    /**
     * Get allowedsecuritylevel
     *
     * @return boolean 
     */
    public function getAllowedsecuritylevel()
    {
        return $this->allowedsecuritylevel;
    }

    /**
     * Set population
     *
     * @param float $population
     * @return Realmlist
     */
    public function setPopulation($population)
    {
        $this->population = $population;
    
        return $this;
    }

    /**
     * Get population
     *
     * @return float 
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * Set gamebuild
     *
     * @param integer $gamebuild
     * @return Realmlist
     */
    public function setGamebuild($gamebuild)
    {
        $this->gamebuild = $gamebuild;
    
        return $this;
    }

    /**
     * Get gamebuild
     *
     * @return integer 
     */
    public function getGamebuild()
    {
        return $this->gamebuild;
    }
}