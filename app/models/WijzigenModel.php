<?php

class WijzigenModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getVehicle($Id)
    {
        $sql = "SELECT v_instruct.VoertuigId,
		                       v_instruct.InstructeurId,
                               voertuig.TypeVoertuigId,
                               voertuig.Type,
                               voertuig.Bouwjaar,
                               voertuig.Brandstof,
                               voertuig.Kenteken
                FROM VoertuigInstructeur AS v_instruct
                JOIN Instructeur AS instruct ON instruct.Id = v_instruct.InstructeurId
                JOIN Voertuig AS voertuig ON voertuig.Id = v_instruct.VoertuigId
                WHERE v_instruct.VoertuigId = $Id";

        $this->db->query($sql);

        return $this->db->resultSetAssoc();
    }

    public function getVehicles($Id)
    {
        $sql = "SELECT Id,
                        TypeVoertuigId,
                        Type,
                        Bouwjaar,
                        Brandstof,
                        Kenteken
                FROM Voertuig
                WHERE Id = $Id";

        $this->db->query($sql);

        return $this->db->resultSetAssoc();
    }
}
