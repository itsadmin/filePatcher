<?php

namespace FilePatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patch History details
 *
 * @ORM\Table(name="history")
 * @ORM\Entity(repositoryClass="FilePatchBundle\Repository\HistoryRepository")
 */
class History
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
     * @var int
     *
     * @ORM\Column(name="davId", type="integer")
     */
    private $davId;

    /**
     * @var int
     *
     * @ORM\Column(name="patchId", type="integer")
     */
    private $patchId;

    /**
     * @var string
     *
     * @ORM\Column(name="original_content", type="text", nullable=true)
     */
    private $originalContent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_executed", type="datetime")
     */
    private $dateExecuted;

    /**
     * @var string
     *
     * @ORM\Column(name="new_content", type="text", nullable=true)
     */
    private $newContent;

  /**
     * @var string
     *
     * @ORM\Column(name="original_file_name", type="string", length=255, unique=false)
     */
    private $original_file_name;

     /**
     * @var string
     *
     * @ORM\Column(name="save_as_name", type="string", length=255, unique=false)
     */
    private $save_as_name;

    /**
     * values can be: createNewFile replaceString, insertBefore, insertAfter, append, prepend 
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=255, unique=false)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="last_run", type="boolean", length=1)
     */
    private $lastRun;


    /**
     * Was the patch successful or not? 
     * @var string
     *
     * @ORM\Column(name="success", type="boolean", length=1)
     */
    private $success;

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
     * Set davId
     *
     * @param integer $davId
     * @return History
     */
    public function setDavId($davId)
    {
        $this->davId = $davId;

        return $this;
    }

    /**
     * Get davId
     *
     * @return integer 
     */
    public function getDavId()
    {
        return $this->davId;
    }

    /**
     * Set patchId
     *
     * @param integer $patchId
     * @return History
     */
    public function setPatchId($patchId)
    {
        $this->patchId = $patchId;

        return $this;
    }

    /**
     * Get patchId
     *
     * @return integer 
     */
    public function getPatchId()
    {
        return $this->patchId;
    }

 /**
     * Set lastRun
     *
     * @param string $lastRun
     * @return History
     */
    public function setlastRun($lastRun)
    {
        $this->lastRun = $lastRun;

        return $this;
    }

   

    /**
     * Get lastRun
     *
     * @return string 
     */
    public function getlastRun()
    {
        return $this->lastRun;
    }

     /**
     * Get success
     *
     * @return string 
     */
    public function getSuccess()
    {
        return $this->success;
    }


 /**
     * Set success
     *
     * @param string $lastRun
     * @return History
     */
    public function setSuccess($success)
    {
        $this->success = $success;

        return $this;
    }


    /**
     * Set originalContent
     *
     * @param string $originalContent
     * @return History
     */
    public function setOriginalContent($originalContent)
    {
        $this->originalContent = $originalContent;

        return $this;
    }

    /**
     * Get originalContent
     *
     * @return string 
     */
    public function getOriginalContent()
    {
        return $this->originalContent;
    }

    /**
     * Set dateExecuted
     *
     * @param \DateTime $dateExecuted
     * @return History
     */
    public function setDateExecuted($dateExecuted)
    {
        $this->dateExecuted = $dateExecuted;

        return $this;
    }

    /**
     * Get dateExecuted
     *
     * @return \DateTime 
     */
    public function getDateExecuted()
    {
        return $this->dateExecuted;
    }

    /**
     * Set newContent
     *
     * @param string $newContent
     * @return History
     */
    public function setNewContent($newContent)
    {
        $this->newContent = $newContent;

        return $this;
    }

    /**
     * Get newContent
     *
     * @return string 
     */
    public function getNewContent()
    {
        return $this->newContent;
    }

     /**
     * Set Action
     *
     * @param string $action
     * @return Dav
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Get Action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

     /**
     * Set Original File Name
     *
     * @param string $original_file_name
     * @return Dav
     */
    public function setOriginalFileName($original_file_name)
    {
        $this->original_file_name = $original_file_name;
        return $this;
    }

    /**
     * Get Original File Name
     *
     * @return string 
     */
    public function getOriginalFileName()
    {
        return $this->original_file_name;
    }

      /**
     * Set Original File Name
     *
     * @param string $save_as_file_name
     * @return Dav
     */
    public function setSaveAsName($save_as_name)
    {
        $this->save_as_name = $save_as_name;
        return $this;
    }

    /**
     * Get Original File Name
     *
     * @return string 
     */
    public function getsave_as_name()
    {
        return $this->save_as_name;
    }

}
