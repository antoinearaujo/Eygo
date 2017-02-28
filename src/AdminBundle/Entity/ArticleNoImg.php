<?php 

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleNoImg
 *
 * @ORM\Table(name="articlenoimg")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\ArticleNoImgRepository")
 */
class ArticleNoImg
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    
    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255)
     */

    protected $message;



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
     * Set name
     *
     * @param string $name
     * @return Article
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    

    /**
     * Set message
     *
     * @param string $message
     * @return Article
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }
}
