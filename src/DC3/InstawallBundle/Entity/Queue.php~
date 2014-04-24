<?php

namespace DC3\InstawallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Queue
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DC3\InstawallBundle\Entity\QueueRepository")
 */
class Queue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="pic_id", type="integer")
     */
    private $picId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;


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
     * Set picId
     *
     * @param integer $picId
     * @return Queue
     */
    public function setPicId($picId)
    {
        $this->picId = $picId;

        return $this;
    }

    /**
     * Get picId
     *
     * @return integer 
     */
    public function getPicId()
    {
        return $this->picId;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Queue
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }
}
