<?php

class render
{
    var $version;
    var $content;
    var $soumission;


    public function setVersion($version){
        $this->version = $version;
    }

    public function setContent($content){
        $this->content = $content;
    }

    public function setSoumission($requete){
        $this->soumission = $requete;
    }



    public function json($debug = false){
        $json['version'] = $this->version;
        $json['content'] = $this->content;
        $json['soumission'] = $this->soumission;

        echo json_encode($json);
    }

}

