<?php

namespace Core\Entity;

class Entity
{
    /**
     * fonction magique __get
     * pour getUrl
     * @param $key
     * @return mixed
     */
    public function __get($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

}