<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
    use ResponseTrait;
    
    public function index(): string
    {
        return view('welcome_message');
    }
    
    public function api_example_get()
    {
        $headers = $this->request->headers();
        $rawInput = $this->request->getBody();
        $jsonData = json_decode($rawInput, true);
        $data = array(
            'error' => 0,
            'message' => 'Success',
            'headers' => $headers,
            'data' => $jsonData
        );
        return $this->respond($data);
        // return view('welcome_message');
    }

    public function api_example_post()
    {
        $headers = $this->request->headers();
        $rawInput = $this->request->getBody();
        $jsonData = json_decode($rawInput, true);
        $data = array(
            'error' => 0,
            'message' => 'Success',
            'headers' => $headers,
            'data' => $jsonData
        );
        return $this->respond($data);
        // return view('welcome_message');
    }
}
