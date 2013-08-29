<?php

namespace Trinity\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RbacSecurityLevelGroups
 *
 * @ORM\Table(name="rbac_security_level_groups")
 * @ORM\Entity
 */
class RbacSecurityLevelGroups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="secId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $secid;

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
     * Set secid
     *
     * @param integer $secid
     * @return RbacSecurityLevelGroups
     */
    public function setSecid($secid)
    {
        $this->secid = $secid;
    
        return $this;
    }

    /**
     * Get secid
     *
     * @return integer 
     */
    public function getSecid()
    {
        return $this->secid;
    }

    /**
     * Set groupid
     *
     * @param \Trinity\AppBundle\Entity\RbacGroups $groupid
     * @return RbacSecurityLevelGroups
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