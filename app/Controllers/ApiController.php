<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class ApiController extends ResourceController
{
    public function index()
    {
        return $this->respond(['data' => 'api'], 200);
    }
}