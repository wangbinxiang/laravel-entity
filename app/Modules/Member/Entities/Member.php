<?php

namespace App\Modules\Member\Entities;

use App\System\Entities\BaseEntity;


/**
 * Class BaseEntity.
 *
 * @package namespace App\System\Entities;
 */
class Member extends BaseEntity
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $cellphone;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $rememberToken;

    /**
     * @var string
     */
    private $createTime;

    /**
     * @var string
     */
    private $updateTime;

    /**
     * Get the value of id
     *
     * @return  string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  string  $id
     *
     * @return  self
     */
    public function setId(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of cellphone
     *
     * @return  string
     */
    public function getCellphone()
    {
        return $this->cellphone;
    }

    /**
     * Set the value of cellphone
     *
     * @param  string  $cellphone
     *
     * @return  self
     */
    public function setCellphone(string $cellphone)
    {
        $this->cellphone = $cellphone;

        return $this;
    }

    /**
     * Get the value of password
     *
     * @return  string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @param  string  $password
     *
     * @return  self
     */
    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of rememberToken
     *
     * @return  string
     */
    public function getRememberToken()
    {
        return $this->rememberToken;
    }

    /**
     * Set the value of rememberToken
     *
     * @param  string  $rememberToken
     *
     * @return  self
     */
    public function setRememberToken(string $rememberToken)
    {
        $this->rememberToken = $rememberToken;

        return $this;
    }

    /**
     * Get the value of createTime
     *
     * @return  string
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set the value of createTime
     *
     * @param  string  $createTime
     *
     * @return  self
     */
    public function setCreateTime(string $createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get the value of updateTime
     *
     * @return  string
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Set the value of updateTime
     *
     * @param  string  $updateTime
     *
     * @return  self
     */
    public function setUpdateTime(string $updateTime)
    {
        $this->updateTime = $updateTime;

        return $this;
    }
}
