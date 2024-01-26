<?php

    class ApiRequest
    {
        private $method_avaliable = ['POST'];
        private $data;

        public function __construct()
        {
            $this->data = [];
        }

        public function setMethod($m)
        {
            $this->data['method'] = $m;
        }

        public function getMethod()
        {
            return $this->data['method'];
        }


        public function setEndPoint($p)
        {
            $this->data['endPoint'] = $p;
        }

        public function getEndPoint()
        {
            return $this->data['endPoint'];
        }

        public function checkMethod()
        {
            return in_array($this->getMethod(), $this->method_avaliable);
        }

        public function sendResponse()
        {
            header('Content-Type: application/json');
            echo json_encode($this->data);
            exit;
        }

        public function sendData($msg = '', $result, $status)
        {   
            $this->data = [
                'status' => $status,
                'message' => $msg,
                'result' => $result
            ];

            $this->sendResponse();

        }

    }

?>