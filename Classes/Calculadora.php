<?php

    require_once 'ApiRequest.php';

    class Calculadora extends ApiRequest
    {
        private $params;

        public function addParameters($p)
        {
            $this->params = $p;
        }

        public function checkEndPoint($endpoint)
        {
            return method_exists($this, $endpoint);
        }

        public function somar()
        {
            $soma = $this->params['n1'] + $this->params['n2'];
            return $soma;
        }

    }

?>