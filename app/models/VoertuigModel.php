<?php

class VoertuigModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getVehicles($instructorId)
    {
        $query = "SELECT 
                    V.Id AS VoertuigID,
                    TV.TypeVoertuig,
                    V.Type,
                    V.Kenteken,
                    V.Bouwjaar,
                    V.Brandstof,
                    TV.Rijbewijscategorie
        FROM VoertuigInstructeur AS VI
        JOIN Voertuig AS V ON V.Id = VI.VoertuigId
        JOIN Instructeur AS I ON I.Id = VI.InstructeurId
        JOIN TypeVoertuig AS TV ON TV.Id = V.TypeVoertuigId
        WHERE I.Id = $instructorId
        ORDER BY TV.Rijbewijscategorie;";

        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function getInstructeur($instructeurId)
    {
        $query = "SELECT 
                    Voornaam,
                    Tussenvoegsel,
                    Achternaam,
                    DatumInDienst,
                    AantalSterren
        FROM Instructeur
        WHERE Id = $instructeurId;";

        $this->db->query($query);

        return $this->db->resultSetAssoc();
    }
}
