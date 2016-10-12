<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liens extends CI_Controller 
{

    public function index()
    {
        $this->load->view('liens/index');
    }

    public function liste()
    {
        $model["liste"] = $this->LiensDAO->liste();
        $this->load->view('liens/liste', $model);
    }

    public function ajout()
    {
        if( $data= $this->input->post() == false)
        {
              $this->load->view('liens/ajout');
        }
        else 
        {
            $data = $this->input->post();
            $model["ajout"]=$this->LiensDAO->insert($data);
           // redirect(site_url("liens/index"));
        }
    }

    public function modif($id)
    {
        if ($this->input->post()) 
        {
            $data = $this->input->post();
            $this->LiensDAO->update($data);
            //redirect(site_url("liens/index"));
        }
        else 
        {
            $model["lien"] = $this->LiensDAO->find($id); // première ligne du résultat
            $this->load->view('liens/modif', $model);
        }
      
            
    }

    public function suppr($id)
    {
        if($this->input->post()) 
        { 
            //$id = $this->input->post("id");
            $this->LiensDAO->delete($id);
           // redirect(site_url("liens/index"));
        }
        
        else 
        {
            $test = $this->LiensDAO->find($id); 
            $model["lien"]  = $test;
            $this->load->view('liens/suppr', $model);

        }
    
    }
    public function detail($id)
    {
        $model["lien"] = $this->LiensDAO->find($id); 
        $this->load->view('liens/detail', $model);

    }
}

?>
