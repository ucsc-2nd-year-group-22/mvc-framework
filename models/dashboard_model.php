<?php

class Dashboard_Model extends Model {
    function __construct() {
        parent::__construct();
    }

    function xhrInsert() {
        // Xml Http Request

        $text = $_POST['text'];
        $st = $this->db->prepare("INSERT INTO data(text) VALUES(:text) ");
        $st->execute(array(':text'=> $text));

    }

    function xhrGetListings() {
        $st = $this->db->prepare('SELECT * FROM data');
        $st->execute();
        $data = $st->fetchAll();
        echo json_encode($data);
    }

}