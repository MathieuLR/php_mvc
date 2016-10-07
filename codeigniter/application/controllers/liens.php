<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liens extends CI_Controller 
{

    public function Liste()
    {
    	$this->load->database();
    	$requete = $this->db->query('SELECT * FROM liens WHERE affichage ="oui" ');
    	$model["liste"] = $requete->result();
    	$this->load->view('liens/liste', $model);
    }

    public function ajout()
    {
        if($data = $this->input->post()== false)
        {
    $this->load->view('liens/ajout');
        }
        else
        {    

        $data = $this->input->post();

        $this->load->database();
        $titre = $this->input->post("titre");
        $description = $this->input->post("description");
        $url = $this->input->post("url");
        $theme = $this->input->post("theme");
        $webmaster = $this->input->post("webmaster");
        $date = date("Y-m-d");
        $affichage = $this->input->post("affichage");

        $sql = "insert into liens (titre,description,url,theme,webmaster,date, affichage) values (?,?,?,?,?,?,?)";
        $this->db->query($sql,array($titre, $description, $url, $theme ,$webmaster,$date ,$affichage));
        $this->load->helper('url');
        redirect('http://127.0.0.1/phase1/codeigniter/index.php/liens/liste');
	    }
    }

	public function modif($id)
	{
    $this->load->database();
    $liste = $this->db->query("select * from liens where id= ?", array($id));
    $model["lien"] = $liste->row(); // première ligne du résultat
    $this->load->view('liens/modif', $model);
	}

	public function script_modif()
    {
        $data = $this->input->post();
        $id = $this->input->post("id");
        $titre = $this->input->post("titre");
        $description = $this->input->post("description");
        $url = $this->input->post("url");
        $theme = $this->input->post("theme");
        $webmaster = $this->input->post("webmaster");
        $date = date("Y-m-d");
        $affichage = $this->input->post("affichage");

        $this->load->database();
        $str = "UPDATE liens SET titre=?, description=?, url=?, theme=?, webmaster=?,date=?,affichage=? where id =".$id;
        $this->db->query($str, array($titre, $description, $url, $theme ,$webmaster,$date ,$affichage));

        $this->load->helper('url');
        redirect(site_url("liens/liste"));
    }

    public function suppr($id)
	{
    //echo $id;
    $liste = $this->db->query("select * from liens where id= ?", array($id));
    $model["lien"] = $liste->row(); // première ligne du résultat
    $this->load->view('liens/suppr', $model);
	}

    public function script_suppr()

     {
       
        $id = $this->input->post("id");
                   
        $liste = $this->db->query("delete from liens where id= ?", array($id));
        $this->load->helper('url');
        redirect('http://127.0.0.1/phase1/codeigniter/index.php/liens/liste');
    }
    public function detail($id)
    {
        
        $liste = $this->db->query("SELECT * FROM liens where id =?",array($id));
        $model["lien"] = $liste->row();
        $this->load->view('liens/detail', $model);
    }
}

