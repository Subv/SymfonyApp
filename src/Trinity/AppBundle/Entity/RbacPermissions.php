<?php

namespace Trinity\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacPermissions
 *
 * @ORM\Table(name="rbac_permissions")
 * @ORM\Entity
 */
class RbacPermissions
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
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Trinity\AppBundle\Entity\RbacRoles", mappedBy="permissionid")
     */
    private $roleid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->roleid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return RbacPermissions
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
     * Add roleid
     *
     * @param \Trinity\AppBundle\Entity\RbacRoles $roleid
     * @return RbacPermissions
     */
    public function addRoleid(\Trinity\AppBundle\Entity\RbacRoles $roleid)
    {
        $this->roleid[] = $roleid;
    
        return $this;
    }

    /**
     * Remove roleid
     *
     * @param \Trinity\AppBundle\Entity\RbacRoles $roleid
     */
    public function removeRoleid(\Trinity\AppBundle\Entity\RbacRoles $roleid)
    {
        $this->roleid->removeElement($roleid);
    }

    /**
     * Get roleid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoleid()
    {
        return $this->roleid;
    }
}