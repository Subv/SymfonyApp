<?php

namespace Trinity\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountPremium
 *
 * @ORM\Table(name="account_premium")
 * @ORM\Entity
 */
class AccountPremium
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $active;

    /**
     * @var integer
     *
     * @ORM\Column(name="accountID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $accountid;

    /**
     * @var float
     *
     * @ORM\Column(name="rate_xp", type="float", nullable=false)
     */
    private $rateXp;

    /**
     * @var float
     *
     * @ORM\Column(name="rate_drop", type="float", nullable=false)
     */
    private $rateDrop;

    /**
     * @var float
     *
     * @ORM\Column(name="rate_money", type="float", nullable=false)
     */
    private $rateMoney;

    /**
     * @var float
     *
     * @ORM\Column(name="rate_rep", type="float", nullable=false)
     */
    private $rateRep;

    /**
     * @var float
     *
     * @ORM\Column(name="rate_honor", type="float", nullable=false)
     */
    private $rateHonor;

    /**
     * @var float
     *
     * @ORM\Column(name="rate_crafting", type="float", nullable=false)
     */
    private $rateCrafting;

    /**
     * @var boolean
     *
     * @ORM\Column(name="repair_cost", type="boolean", nullable=false)
     */
    private $repairCost;

    /**
     * @var boolean
     *
     * @ORM\Column(name="speed_ghost", type="boolean", nullable=false)
     */
    private $speedGhost;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reset_talent", type="boolean", nullable=false)
     */
    private $resetTalent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="crossfaction_chat", type="boolean", nullable=false)
     */
    private $crossfactionChat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="instant_mounts", type="boolean", nullable=false)
     */
    private $instantMounts;

    /**
     * @var integer
     *
     * @ORM\Column(name="unsetdate", type="integer", nullable=false)
     */
    private $unsetdate;



    /**
     * Set active
     *
     * @param boolean $active
     * @return AccountPremium
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set accountid
     *
     * @param integer $accountid
     * @return AccountPremium
     */
    public function setAccountid($accountid)
    {
        $this->accountid = $accountid;
    
        return $this;
    }

    /**
     * Get accountid
     *
     * @return integer 
     */
    public function getAccountid()
    {
        return $this->accountid;
    }

    /**
     * Set rateXp
     *
     * @param float $rateXp
     * @return AccountPremium
     */
    public function setRateXp($rateXp)
    {
        $this->rateXp = $rateXp;
    
        return $this;
    }

    /**
     * Get rateXp
     *
     * @return float 
     */
    public function getRateXp()
    {
        return $this->rateXp;
    }

    /**
     * Set rateDrop
     *
     * @param float $rateDrop
     * @return AccountPremium
     */
    public function setRateDrop($rateDrop)
    {
        $this->rateDrop = $rateDrop;
    
        return $this;
    }

    /**
     * Get rateDrop
     *
     * @return float 
     */
    public function getRateDrop()
    {
        return $this->rateDrop;
    }

    /**
     * Set rateMoney
     *
     * @param float $rateMoney
     * @return AccountPremium
     */
    public function setRateMoney($rateMoney)
    {
        $this->rateMoney = $rateMoney;
    
        return $this;
    }

    /**
     * Get rateMoney
     *
     * @return float 
     */
    public function getRateMoney()
    {
        return $this->rateMoney;
    }

    /**
     * Set rateRep
     *
     * @param float $rateRep
     * @return AccountPremium
     */
    public function setRateRep($rateRep)
    {
        $this->rateRep = $rateRep;
    
        return $this;
    }

    /**
     * Get rateRep
     *
     * @return float 
     */
    public function getRateRep()
    {
        return $this->rateRep;
    }

    /**
     * Set rateHonor
     *
     * @param float $rateHonor
     * @return AccountPremium
     */
    public function setRateHonor($rateHonor)
    {
        $this->rateHonor = $rateHonor;
    
        return $this;
    }

    /**
     * Get rateHonor
     *
     * @return float 
     */
    public function getRateHonor()
    {
        return $this->rateHonor;
    }

    /**
     * Set rateCrafting
     *
     * @param float $rateCrafting
     * @return AccountPremium
     */
    public function setRateCrafting($rateCrafting)
    {
        $this->rateCrafting = $rateCrafting;
    
        return $this;
    }

    /**
     * Get rateCrafting
     *
     * @return float 
     */
    public function getRateCrafting()
    {
        return $this->rateCrafting;
    }

    /**
     * Set repairCost
     *
     * @param boolean $repairCost
     * @return AccountPremium
     */
    public function setRepairCost($repairCost)
    {
        $this->repairCost = $repairCost;
    
        return $this;
    }

    /**
     * Get repairCost
     *
     * @return boolean 
     */
    public function getRepairCost()
    {
        return $this->repairCost;
    }

    /**
     * Set speedGhost
     *
     * @param boolean $speedGhost
     * @return AccountPremium
     */
    public function setSpeedGhost($speedGhost)
    {
        $this->speedGhost = $speedGhost;
    
        return $this;
    }

    /**
     * Get speedGhost
     *
     * @return boolean 
     */
    public function getSpeedGhost()
    {
        return $this->speedGhost;
    }

    /**
     * Set resetTalent
     *
     * @param boolean $resetTalent
     * @return AccountPremium
     */
    public function setResetTalent($resetTalent)
    {
        $this->resetTalent = $resetTalent;
    
        return $this;
    }

    /**
     * Get resetTalent
     *
     * @return boolean 
     */
    public function getResetTalent()
    {
        return $this->resetTalent;
    }

    /**
     * Set crossfactionChat
     *
     * @param boolean $crossfactionChat
     * @return AccountPremium
     */
    public function setCrossfactionChat($crossfactionChat)
    {
        $this->crossfactionChat = $crossfactionChat;
    
        return $this;
    }

    /**
     * Get crossfactionChat
     *
     * @return boolean 
     */
    public function getCrossfactionChat()
    {
        return $this->crossfactionChat;
    }

    /**
     * Set instantMounts
     *
     * @param boolean $instantMounts
     * @return AccountPremium
     */
    public function setInstantMounts($instantMounts)
    {
        $this->instantMounts = $instantMounts;
    
        return $this;
    }

    /**
     * Get instantMounts
     *
     * @return boolean 
     */
    public function getInstantMounts()
    {
        return $this->instantMounts;
    }

    /**
     * Set unsetdate
     *
     * @param integer $unsetdate
     * @return AccountPremium
     */
    public function setUnsetdate($unsetdate)
    {
        $this->unsetdate = $unsetdate;
    
        return $this;
    }

    /**
     * Get unsetdate
     *
     * @return integer 
     */
    public function getUnsetdate()
    {
        return $this->unsetdate;
    }
}