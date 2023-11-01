<?php

class Voertuig extends BaseController
{
    private $voertuigModel;

    public function __construct()
    {
        $this->voertuigModel = $this->model('VoertuigModel');
    }

    public function index($id = NULL)
    {
        $result = $this->voertuigModel->getVehicles($id);
        $instructeur = $this->voertuigModel->getInstructeur($id);

        if ($result == null) {
            $th = "";
            $rows = "<h2>Deze instructeur heeft op dit moment geen voertuigen toegewezen.</h2>";
        } else {
            $th = "<th>Type Voertuig</th>
            <th>Type</th>
            <th>Kenteken</th>
            <th>Bouwjaar</th>
            <th>Brandstof</th>
            <th>Rijbewijscategorie</th>
            <th>Wijzigen</th>";

            $result = $this->voertuigModel->getVehicles($id);
            $rows = "";
            foreach ($result as $voertuig) {
                $voertuigen = $voertuig->VoertuigID;
                $instructeurId = $voertuig->InstructeurId;
                $rows .= "<tr>
                <td>$voertuig->TypeVoertuig</td>
                <td>$voertuig->Type</td>
                <td>$voertuig->Kenteken</td>
                <td>$voertuig->Bouwjaar</td>
                <td>$voertuig->Brandstof</td>
                <td>$voertuig->Rijbewijscategorie</td>
                <td>
                    <a href='../../wijzigen/id/$voertuig->VoertuigID'>
                        <i class='bx bxs-edit' style='color:#2c2323'></i>
                    </a>
                </td>
                <td>
                    <a href='../../delete/id/$voertuigen?voertuig=$voertuigen&instructeur=$instructeurId&case=1'>
                        <i class='bx bxs-trash' style='color:#ff0000'></i>
                    </a>
                </td>
                </tr>";
            }
        }

        $data = [
            'title' => 'Door instructeur gebruikte voertuigen',
            'rows' => $rows,
            'fullName' => $instructeur['Voornaam'] . ' ' . $instructeur['Tussenvoegsel'] . ' ' . $instructeur['Achternaam'],
            'did' => $instructeur['DatumInDienst'],
            'TotalStars' => $instructeur['AantalSterren'],
            'th' => $th,
            'id' => $id
        ];

        $this->view('voertuig/voertuig', $data);
    }
}
