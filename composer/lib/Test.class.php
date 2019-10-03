<?php
/**
 * composer 自动加载自定义类
 *
 * @author      sail ylj
 *
 * Class Api
 */
class Test
{ 
    
    protected $str;
   

    /**
     * 设定配置项
     *
     * @param array $config
     */
    public function __construct()
    {
        $this->str = 'this is a test by ylj';
    }

    public function echoStr(){
        return $this->str;
    }
}