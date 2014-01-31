<?php

namespace DC3\InstawallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pic
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DC3\InstawallBundle\Entity\PicRepository")
 */
class Pic
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
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=1000)
     */
    private $url;

    /**
     * @var integer
     *
     * @ORM\Column(name="like_count", type="integer")
     */
    private $likeCount;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=1000)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=255)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_pic", type="string", length=255)
     */
    private $userPic;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var integer
     *
     * @ORM\Column(name="picture_id", type="integer")
     */
    private $pictureId;


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
     * Set url
     *
     * @param string $url
     * @return Pic
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set likeCount
     *
     * @param integer $likeCount
     * @return Pic
     */
    public function setLikeCount($likeCount)
    {
        $this->likeCount = $likeCount;

        return $this;
    }

    /**
     * Get likeCount
     *
     * @return integer 
     */
    public function getLikeCount()
    {
        return $this->likeCount;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Pic
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return Pic
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userPic
     *
     * @param string $userPic
     * @return Pic
     */
    public function setUserPic($userPic)
    {
        $this->userPic = $userPic;

        return $this;
    }

    /**
     * Get userPic
     *
     * @return string 
     */
    public function getUserPic()
    {
        return $this->userPic;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Pic
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

    /**
     * Set pictureId
     *
     * @param integer $pictureId
     * @return Pic
     */
    public function setPictureId($pictureId)
    {
        $this->pictureId = $pictureId;

        return $this;
    }

    /**
     * Get pictureId
     *
     * @return integer 
     */
    public function getPictureId()
    {
        return $this->pictureId;
    }
}
