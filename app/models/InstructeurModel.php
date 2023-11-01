<?php

class InstructeurModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getInstructeurs()
    {
        $sql = "SELECT i.Id,
                       i.Voornaam,
                       i.Tussenvoegsel,
                       i.Achternaam,
                       i.Mobiel,
                       i.DatumInDienst,
                       i.AantalSterren
                FROM Instructeur i
                ORDER BY i.AantalSterren DESC";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
    public function countInstructeurs()
    {
        $sql = "SELECT COUNT(Id) AS Total FROM Instructeur i";

        $this->db->query($sql);

        return $this->db->resultSetAssoc();
    }
}
