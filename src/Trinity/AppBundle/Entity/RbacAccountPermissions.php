<?php

namespace Trinity\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacAccountPermissions
 *
 * @ORM\Table(name="rbac_account_permissions")
 * @ORM\Entity
 */
class RbacAccountPermissions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="realmId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $realmid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="granted", type="boolean", nullable=false)
     */
    private $granted;

    /**
     * @var \Trinity\AppBundle\Entity\Account
     *
     * @ORM\OneToOne(targetEntity="Trinity\AppBundle\Entity\Account")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="accountId", referencedColumnName="id", unique=true)
     * })
     */
    private $accountid;

    /**
     * @var \Trinity\AppBundle\Entity\RbacPermissions
     *
     * @ORM\OneToOne(targetEntity="Trinity\AppBundle\Entity\RbacPermissions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="permissionId", referencedColumnName="id", unique=true)
     * })
     */
    private $permissionid;



    /**
     * Set realmid
     *
     * @param integer $realmid
     * @return RbacAccountPermissions
     */
    public function setRealmid($realmid)
    {
        $this->realmid = $realmid;
    
        return $this;
    }

    /**
     * Get realmid
     *
     * @return integer 
     */
    public function getRealmid()
    {
        return $this->realmid;
    }

    /**
     * Set granted
     *
     * @param boolean $granted
     * @return RbacAccountPermissions
     */
    public function setGranted($granted)
    {
        $this->granted = $granted;
    
        return $this;
    }

    /**
     * Get granted
     *
     * @return boolean 
     */
    public function getGranted()
    {
        return $this->granted;
    }

    /**
     * Set accountid
     *
     * @param \Trinity\AppBundle\Entity\Account $accountid
     * @return RbacAccountPermissions
     */
    public function setAccountid(\Trinity\AppBundle\Entity\Account $accountid = null)
    {
        $this->accountid = $accountid;
    
        return $this;
    }

    /**
     * Get accountid
     *
     * @return \Trinity\AppBundle\Entity\Account 
     */
    public function getAccountid()
    {
        return $this->accountid;
    }

    /**
     * Set permissionid
     *
     * @param \Trinity\AppBundle\Entity\RbacPermissions $permissionid
     * @return RbacAccountPermissions
     */
    public function setPermissionid(\Trinity\AppBundle\Entity\RbacPermissions $permissionid = null)
    {
        $this->permissionid = $permissionid;
    
        return $this;
    }

    /**
     * Get permissionid
     *
     * @return \Trinity\AppBundle\Entity\RbacPermissions 
     */
    public function getPermissionid()
    {
        return $this->permissionid;
    }
}