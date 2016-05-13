<?php

namespace ISTutoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Advert
 *
 * @ORM\Table(name="advert")
 * @ORM\Entity(repositoryClass="ISTutoBundle\Repository\AdvertRepository")
 */
class Advert
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
/**
     * @var datetime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Get date
     * @var datetime
     * @return datetime
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     *  @var datetime
     * Set date
     * @param datetime $date
     * @return Advert
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }
}

