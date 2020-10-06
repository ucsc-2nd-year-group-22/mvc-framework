<?php

class Dashboard_Model extends Model {
    function __construct() {
        parent::__construct();
    }

    function xhrInsert() {
        $text = $_POST['text'];
        $st = $this->db->prepare("INSERT INTO data(text) VALUES(:text) ");
        $st->execute(array(':text'=> $text));


    }

}