<?php

namespace Trinity\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacAccountRoles
 *
 * @ORM\Table(name="rbac_account_roles")
 * @ORM\Entity
 */
class RbacAccountRoles
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
     * @var \Trinity\AppBundle\Entity\RbacRoles
     *
     * @ORM\OneToOne(targetEntity="Trinity\AppBundle\Entity\RbacRoles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="roleId", referencedColumnName="id", unique=true)
     * })
     */
    private $roleid;



    /**
     * Set realmid
     *
     * @param integer $realmid
     * @return RbacAccountRoles
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
     * @return RbacAccountRoles
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
     * @return RbacAccountRoles
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
     * Set roleid
     *
     * @param \Trinity\AppBundle\Entity\RbacRoles $roleid
     * @return RbacAccountRoles
     */
    public function setRoleid(\Trinity\AppBundle\Entity\RbacRoles $roleid = null)
    {
        $this->roleid = $roleid;
    
        return $this;
    }

    /**
     * Get roleid
     *
     * @return \Trinity\AppBundle\Entity\RbacRoles 
     */
    public function getRoleid()
    {
        return $this->roleid;
    }
}