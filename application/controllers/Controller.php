<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends  CI_Controller {
    
    /*VIEWS*/
    
    public function index()
    {
         $this->load->view('HTML/Index.php');
    }
    
    public function Login()
    {
         $this->load->view('HTML/Login.php');
    } 
    public function Ubicacion()
    {
         $this->load->view('HTML/Ubicacion.php');
    } 
    public function Contactos()
    {
         $this->load->view('HTML/Contactos.php');
    } 
    public function OrtopediaMax()
    {
         $this->load->view('HTML/OrtopediaMax.php');
    }
    public function Productos()
    {
         $this->load->view('HTML/Productos.php');
    }
    public function AcercaDe()
    {
         $this->load->view('HTML/AcercaDe.php');
    }
    
    public function Citas()
    {
         $this->load->view('HTML/Citas.php');
    }
    public function Ver()
    {
        
        $this->load->model('Consultas');
        $data = array('Pacientes' => $this->Consultas->ConsultaI());
        $this->load->view('HTML/Ver.php',$data);
        
    }
    
    //DATA BASE 
    
     public function INSERT()
    {
    

        $enfer=$_POST["enfer"];
        $Urg=$_POST["Urg"];
         
        $nombre=$_POST["name"];
        $apellidos=$_POST["ape"];
         
        $alergia=$_POST["Ale"];
        $com=$_POST["com"];
         
        $tel=$_POST["Tel"];
        $presion=$_POST["Pre"];
         
        $data = array(
            
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'enfermedad' => $enfer,
            'urgencia' => $Urg,
            'alergias' => $alergia,
            'comentario' => $com,
            'presion' => $presion,
            'telefono' => $tel
        
        );
        
        $this->db->insert('Paciente', $data);
         
        $this->load->view('HTML/Citas.php');
    }
    
}

?>