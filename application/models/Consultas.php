<?php
  class Consultas extends CI_Model{
    
    public function ConsultaI()
    {
       $consulta = $this->db->query('SELECT idPac,nombre,apellidos,telefono FROM Paciente;');
        return $consulta->result();
    }
    
}

?>