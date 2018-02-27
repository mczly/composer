<?php
/**
 * Created by PhpStorm.
 * User: Y
 * Date: 2018/3/6
 * Time: 11:14
 */

namespace core;

class View {
    //模板文件
    protected $file;
    //模板变量
    protected $vars = [];

    //
    public function make($file){
        $this->file = 'view/'.$file.'.html';
        return $this;
    }

    //分配变量
    public function with($name,$value){
        $this->vars[$name] = $value;
        return $this;
    }

    public function __toString(){
        extract($this->vars);
        include $this->file;
        return '';
    }
}