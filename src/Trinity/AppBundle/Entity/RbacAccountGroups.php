<?php

namespace Trinity\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacAccountGroups
 *
 * @ORM\Table(name="rbac_account_groups")
 * @ORM\Entity
 */
class RbacAccountGroups
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
     * @var \Trinity\AppBundle\Entity\Account
     *
     * @ORM\OneToOne(targetEntity="Trinity\AppBundle\Entity\Account")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="accountId", referencedColumnName="id", unique=true)
     * })
     */
    private $accountid;

    /**
     * @var \Trinity\AppBundle\Entity\RbacGroups
     *
     * @ORM\OneToOne(targetEntity="Trinity\AppBundle\Entity\RbacGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="groupId", referencedColumnName="id", unique=true)
     * })
     */
    private $groupid;



    /**
     * Set realmid
     *
     * @param integer $realmid
     * @return RbacAccountGroups
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
     * Set accountid
     *
     * @param \Trinity\AppBundle\Entity\Account $accountid
     * @return RbacAccountGroups
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
     * Set groupid
     *
     * @param \Trinity\AppBundle\Entity\RbacGroups $groupid
     * @return RbacAccountGroups
     */
    public function setGroupid(\Trinity\AppBundle\Entity\RbacGroups $groupid = null)
    {
        $this->groupid = $groupid;
    
        return $this;
    }

    /**
     * Get groupid
     *
     * @return \Trinity\AppBundle\Entity\RbacGroups 
     */
    public function getGroupid()
    {
        return $this->groupid;
    }
}