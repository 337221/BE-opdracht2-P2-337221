<?php

class Wijzigen extends BaseController
{
    private $wijzigenModel;

    public function __construct()
    {
        $this->wijzigenModel = $this->model('WijzigenModel');
    }

    public function index($id = NULL)
    {
        $result = $this->wijzigenModel->getVehicles($id);
        if ($result == null) {
            $result = $this->wijzigenModel->getVehicles($id);
        } else {
            $result = $this->wijzigenModel->getVehicle($id);
        }

        $data = [
            'title' => 'Wijzigen voertuiggegevens',
            'instructeur' => isset($result['InstructeurId']) ? $result['InstructeurId'] : NULL,
            'typeVoertuig' => $result['TypeVoertuigId'],
            'autoMerk' => $result['Type'],
            'bouwjaar' => $result['Bouwjaar'],
            'brandstof' => $result['Brandstof'],
            'kenteken' => $result['Kenteken'],
            'id' => $id
        ];

        $this->view('wijzigen/wijzigen', $data);
    }
}
