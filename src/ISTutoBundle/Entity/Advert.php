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
     * @var string
     *
     * @ORM\Column(name="title",  type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="author",  type="string", length=255)
     */
    private $author;

    /**
     * @var text
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

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

    /**
     * Get title
     * @var string
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     *  @var string
     * Set title
     * @param string $title
     * @return Advert
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }


    /**
     * Get author
     * @var string
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     *  @var varchar(255)
     * Set author
     * @param string $author
     * @return Advert
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }


    /**
     * Get content
     * @var text
     * @return text
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     *  @var text
     * Set content
     * @param text $content
     * @return Advert
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }
}
