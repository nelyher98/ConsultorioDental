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
    
}

?>