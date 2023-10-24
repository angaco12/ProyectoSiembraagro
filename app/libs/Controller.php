<?php

class Controller
{
    public function view($view , $datos = []) {
        if(file_exists("../app/views/" . $view . ".php")) {
            require_once "../app/views/" . $view . ".php";
        } else {
            echo "The view doesn't exist";
        }
    }

    public function model($model) {
        require_once "../app/model/" . $model . ".php";
        return new $model;
    }
}