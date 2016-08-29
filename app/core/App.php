<?php

class App {
    private $url;

    public function __construct($url) {
        $this->url = $this->breakURL($url);

        var_dump($this->url);
    }

    private function breakURL($url) {
        if (is_null($url)) {
            return ['index'];
        }

        $url = trim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        return explode('/', $url);        
    }
}

