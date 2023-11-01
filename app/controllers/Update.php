<?php

class Update extends BaseController
{
    private $updateModel;

    public function __construct()
    {
        $this->updateModel = $this->model('UpdateModel');
    }

    public function index()
    {

        $voertuigId = $_POST['voertuig'];
        $instructeurId = $_POST['instructeur'];
        $typeVoertuig = $_POST['typeVoertuig'];
        $autoMerk = $_POST['autoMerk'];
        $Bouwjaar = $_POST['bouwjaar'];
        $Brandstof = $_POST['brandstof'];
        $Kenteken = $_POST['kenteken'];

        $this->updateModel->Change($voertuigId, $instructeurId, $typeVoertuig, $autoMerk, $Bouwjaar, $Brandstof, $Kenteken);

        $data = [
            'title' => 'Voertuig gewijzigd!'
        ];

        $this->view('update/update', $data);
    }
}
