<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventRepository")
 */
class Event
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startdate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $enddate;

    /**
     * @ORM\ManyToOne(targetEntity="Game")
     * @ORM\JoinColumn(name="game_id", referencedColumnName="id")
     */
    private $game;

    /**
     * @ORM\OneToMany(targetEntity="EventCountry", mappedBy="event")
     */
    private $eventCountries;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eventCountries = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Event
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     *
     * @return Event
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set game
     *
     * @param \AppBundle\Entity\Game $game
     *
     * @return Event
     */
    public function setGame(\AppBundle\Entity\Game $game = null)
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get game
     *
     * @return \AppBundle\Entity\Game
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * Add eventCountry
     *
     * @param \AppBundle\Entity\EventCountry $eventCountry
     *
     * @return Event
     */
    public function addEventCountry(\AppBundle\Entity\EventCountry $eventCountry)
    {
        $this->eventCountries[] = $eventCountry;

        return $this;
    }

    /**
     * Remove eventCountry
     *
     * @param \AppBundle\Entity\EventCountry $eventCountry
     */
    public function removeEventCountry(\AppBundle\Entity\EventCountry $eventCountry)
    {
        $this->eventCountries->removeElement($eventCountry);
    }

    /**
     * Get eventCountries
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEventCountries()
    {
        return $this->eventCountries;
    }

    public function getEventCountriesArray()
    {
        $countries = array();
        foreach ($this->getEventCountries() as $eventCountry) {
            $countryName = $eventCountry->getCountry()->getName();
            $countries[$countryName] = $eventCountry->getScore();
        }

        return $countries;
    }
}
