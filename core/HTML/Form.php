<?php

namespace Core\HTML;

/**
 * Class Form
 * Génère un formulaire
 * @package Core\HTML
 */

class Form {

    /**
     * @var array données utilisées par le form
     */
    protected $data;
    /**
     * @var string tag utilisé pour entourer les champs
     */
    public $surround = 'p';

    /**
     * Form constructor.
     * @param array $data Données utilisées par le form
     */
    public function __construct($data = array()) {
        $this->data = $data;
    }

    /**
     * @param $html Code HTML à entourer
     * @return string
     */
    protected function surround($html){
        return "<{$this->surround}>$html</{$this->surround}>";
    }

    /**
     * @param $index string index de la valeur à récupérer
     * @return string
     */
    public function getValue($index){
        if(is_object($this->data)){
            return $this->data->$index;
        }
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $name
     * @param $label
     * @param  $options
     * @return string
     */
    public function input($name, $label, $options = []){
        $type = isset($options['type']) ? $options['type'] : 'text';
        return $this->surround(
            '<input type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) . '">'
        );
    }

    /**
     * @return string
     */
    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>');
    }

}