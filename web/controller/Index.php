<?php
/**
 * Created by PhpStorm.
 * User: Y
 * Date: 2018/3/6
 * Time: 10:47
 */
namespace web\controller;
use core\View;
use Gregwar\Captcha\CaptchaBuilder;

class Index{
    protected $view;

    public function __construct(){
        $this->view = new View();
    }

    public function show(){
        return $this->view->make('index')->with('version','?汾 1.0 copyright:ly');
    }

    public function login(){
        return $this->view->make('login');
    }

    public function code(){
        header('Content-type: image/jpeg');
        $builder = new CaptchaBuilder;
        $builder->build('100','30');
        $_SESSION['phrase'] = $builder->getPhrase();
        $builder->output();
        return $builder;
    }
}