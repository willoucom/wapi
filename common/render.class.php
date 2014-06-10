<?php

class render
{
    var $version;
    var $content;


    public function setVersion($version){
        $this->version = $version;
    }

    public function setContent($content){
        $this->content = $content;
    }


    public function json($debug = false){
        $json['version'] = $this->version;
        $json['content'] = $this->content;

        echo json_encode($json);
    }

}

