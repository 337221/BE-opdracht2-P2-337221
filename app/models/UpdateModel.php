<?php

class UpdateModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function Change($VoertuigId, $InstructeurId, $typeVoertuig, $autoMerk, $bouwjaar, $brandstof, $kenteken)
    {
        $checkQuery = "SELECT 1 FROM VoertuigInstructeur WHERE VoertuigId = $VoertuigId LIMIT 1";
        $this->db->query($checkQuery);
        if (!$this->db->resultSetAssoc()) {
            $insertAndUpdateQuery = "UPDATE Voertuig
                SET TypeVoertuigId = $typeVoertuig,
                    Type = '$autoMerk',
                    Bouwjaar = '$bouwjaar',
                    Brandstof = '$brandstof',
                    Kenteken = '$kenteken',
                    DatumGewijzigd = sysdate(6)
                WHERE Id = $VoertuigId;
                INSERT INTO VoertuigInstructeur 
                (VoertuigId, InstructeurId, Begindatum, Begintijd, Actief, Einddatum, DatumGewijzigd, DatumAangemaakt) 
                VALUES ($VoertuigId, $InstructeurId, sysdate(3), '1', NULL, sysdate(6), sysdate(6));";
            $this->db->query($insertAndUpdateQuery);
            header("refresh:2;../../voertuig/id/$InstructeurId");
        } else {
            $updateQuery = "UPDATE Voertuig
                SET TypeVoertuigId = $typeVoertuig,
                    Type = '$autoMerk',
                    Bouwjaar = '$bouwjaar',
                    Brandstof = '$brandstof',
                    Kenteken = '$kenteken',
                    DatumGewijzigd = sysdate(6)
                WHERE Id = $VoertuigId;
                UPDATE VoertuigInstructeur
                SET InstructeurId = $InstructeurId,
                    DatumGewijzigd = sysdate(6)
                WHERE VoertuigId = $VoertuigId;";
            $this->db->query($updateQuery);
            header("refresh:2;../../voertuig/id/$InstructeurId");
        }
        return $this->db->execute();
    }
}
