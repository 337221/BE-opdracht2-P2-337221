<?php

class Toewijzen extends BaseController
{
    private $toewijzenModel;

    public function __construct()
    {
        $this->toewijzenModel = $this->model('ToewijzenModel');
    }

    public function index($id = NULL)
    {
        $result = $this->toewijzenModel->getUnassignedVehicle();
        $instructeur = $this->toewijzenModel->getInstructeur($id);

        if ($result == null) {
            $th = "";
            $rows = "<h2>Er zijn geen voertuigen meer over.</h2>";
            header("refresh:3;../../voertuig/id/$id");
        } else {
            $th = "<th>Type Voertuig</th>
            <th>Type</th>
            <th>Kenteken</th>
            <th>Bouwjaar</th>
            <th>Brandstof</th>
            <th>Rijbewijscategorie</th>
            <th>Toewijzen</th>
            <th>Wijzigen</th>";

            $result = $this->toewijzenModel->getUnassignedVehicle();
            $rows = "";
            foreach ($result as $assign) {
                $voertuig = $assign->VoertuigID;

                $rows .= "<tr>
                <td>$assign->TypeVoertuig</td>
                <td>$assign->Type</td>
                <td>$assign->Kenteken</td>
                <td>$assign->Bouwjaar</td>
                <td>$assign->Brandstof</td>
                <td>$assign->Rijbewijscategorie</td>
                <td>
                    <a href='../../create/id/$voertuig?voertuig=$voertuig&instructeur=$id'>
                        <i class='bx bxs-edit' style='color:#2c2323'></i>
                    </a>
                </td>
                <td>
                    <a href='../../wijzigen/id/$voertuig'>
                        <i class='bx bxs-edit' style='color:#2c2323'></i>
                    </a>
                </td>
                </tr>";
            }
        }


        $data = [
            'title' => 'Alle beschikbare voertuigen',
            'rows' => $rows,
            'fullName' => $instructeur['Voornaam'] . ' ' . $instructeur['Tussenvoegsel'] . ' ' . $instructeur['Achternaam'],
            'did' => $instructeur['DatumInDienst'],
            'TotalStars' => $instructeur['AantalSterren'],
            'th' => $th
        ];

        $this->view('toewijzen/toewijzen', $data);
    }
}
