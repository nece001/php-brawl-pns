<?php

namespace Nece\Brawl\Pns;

/**
 * 号码类
 *
 * @Author nece001@163.com
 * @DateTime 2023-06-28
 */
class PhoneNumber
{
    private $code = '86';
    private $number;

    /**
     * 构造
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-28
     *
     * @param string $number
     * @param string $code
     */
    public function __construct($number, $code = '86')
    {
        $this->code = $code;
        $this->number = $number;
    }

    /**
     * 设置国际区号
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-28
     *
     * @param string $value
     *
     * @return void
     */
    public function setCode($value)
    {
        $this->code = $value;
    }

    /**
     * 获取国际区号
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-28
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * 设置号码
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-28
     *
     * @param string $value
     *
     * @return void
     */
    public function setNumber($value)
    {
        $this->number = $value;
    }

    /**
     * 获取号码
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-28
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * 获取完整号码
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-28
     *
     * @return string
     */
    public function toNumber()
    {
        return '+' . $this->code . $this->number;
    }
}
