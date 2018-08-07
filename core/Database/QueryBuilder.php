<?php

namespace Core\Database;


class QueryBuilder
{

    private $fields = [];
    private $conditions = [];
    private $from = [];

    public function select(){
        $this->fields = func_get_args();
        return $this;
    }

    public function where(){
        // arguments peuvent être des tableaux fait un foreach
        foreach (func_get_args() as $arg) {
            $this->conditions[] = $arg;
        }
        return $this;
    }

    public function from($table, $alias = null){
        if(is_null($alias)){
            $this->from[] = $table;
        } else {
            $this->from[] = "$table AS $alias";
        }
        return $this;
    }

//    méthode magique : converti objet en chaîne de caractère
    public function __toString(){
        return 'SELECT ' . implode(', ', $this->fields)
            . ' FROM ' . implode(', ', $this->from)
            . ' WHERE ' . implode(' AND ', $this->conditions);
    }

}