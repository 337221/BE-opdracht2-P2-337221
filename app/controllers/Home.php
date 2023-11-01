<?php

class Home extends BaseController
{
    public function index($id = NULL, $name = NULL)
    {

        $data = [
            'title' => 'Welkom op mijn site!',
            'id'    => $id,
            'name'  => $name
        ];

        $this->view('home/index', $data);
    }
}
