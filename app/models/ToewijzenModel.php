<?php

class ToewijzenModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getUnassignedVehicle()
    {
        $sql = "SELECT v.Id AS VoertuigID,
                       tv.TypeVoertuig,
                       v.Type,
                       v.Kenteken,
                       v.Bouwjaar,
                       v.Brandstof,
                       tv.Rijbewijscategorie
                FROM Voertuig v
                LEFT JOIN VoertuigInstructeur vi ON v.Id = vi.VoertuigId
                INNER JOIN TypeVoertuig tv ON tv.Id = v.TypeVoertuigId
                WHERE vi.VoertuigId IS NULL
                ORDER BY tv.Rijbewijscategorie";

        $this->db->query($sql);

        return $this->db->resultSet();
    }

    public function getInstructeur($Id)
    {
        $sql = "SELECT i.Voornaam,
                       i.Tussenvoegsel,
                       i.Achternaam,
                       i.DatumInDienst,
                       i.AantalSterren
                FROM Instructeur i
                WHERE i.Id = " . $Id;

        $this->db->query($sql);

        return $this->db->resultSetAssoc();
    }
}
