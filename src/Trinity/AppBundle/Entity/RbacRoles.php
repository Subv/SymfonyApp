<?php

namespace Trinity\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacRoles
 *
 * @ORM\Table(name="rbac_roles")
 * @ORM\Entity
 */
class RbacRoles
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
     * @ORM\ManyToMany(targetEntity="Trinity\AppBundle\Entity\RbacGroups", mappedBy="roleid")
     */
    private $groupid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Trinity\AppBundle\Entity\RbacPermissions", inversedBy="roleid")
     * @ORM\JoinTable(name="rbac_role_permissions",
     *   joinColumns={
     *     @ORM\JoinColumn(name="roleId", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="permissionId", referencedColumnName="id")
     *   }
     * )
     */
    private $permissionid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->groupid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->permissionid = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return RbacRoles
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
     * Add groupid
     *
     * @param \Trinity\AppBundle\Entity\RbacGroups $groupid
     * @return RbacRoles
     */
    public function addGroupid(\Trinity\AppBundle\Entity\RbacGroups $groupid)
    {
        $this->groupid[] = $groupid;
    
        return $this;
    }

    /**
     * Remove groupid
     *
     * @param \Trinity\AppBundle\Entity\RbacGroups $groupid
     */
    public function removeGroupid(\Trinity\AppBundle\Entity\RbacGroups $groupid)
    {
        $this->groupid->removeElement($groupid);
    }

    /**
     * Get groupid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Add permissionid
     *
     * @param \Trinity\AppBundle\Entity\RbacPermissions $permissionid
     * @return RbacRoles
     */
    public function addPermissionid(\Trinity\AppBundle\Entity\RbacPermissions $permissionid)
    {
        $this->permissionid[] = $permissionid;
    
        return $this;
    }

    /**
     * Remove permissionid
     *
     * @param \Trinity\AppBundle\Entity\RbacPermissions $permissionid
     */
    public function removePermissionid(\Trinity\AppBundle\Entity\RbacPermissions $permissionid)
    {
        $this->permissionid->removeElement($permissionid);
    }

    /**
     * Get permissionid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPermissionid()
    {
        return $this->permissionid;
    }
}