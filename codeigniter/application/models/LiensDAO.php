<?php


class LiensDAO extends CI_model {

		function liste () {

				
				$requete = $this->db->query('SELECT * FROM liens WHERE affichage ="oui" ');
				return $requete->result();
		}

		function find ($id) {
				
				$requete = $this->db->query("select * from liens where id= ?", array($id));
				return $requete->row();
		}

		function update ($data) {
		
			$id = $data["id"];
			$titre = $data["titre"];
			$description = $data["description"];
			$url = $data["url"];
			$theme = $data["theme"];
			$webmaster = $data["webmaster"];
			$date = date("Y-m-d");
			$affichage = $data["affichage"];
			$str = "UPDATE liens SET titre=?, description=?, url=?, theme=?, webmaster=?,date=?,affichage=? where id =".$id;
			$this->db->query($str, array($titre, $description, $url, $theme ,$webmaster,$date ,$affichage));
		}

		function delete ($id) {

			$this->db->query("DELETE from liens where id= ?", array($id));

           
		}

		function insert ($data) {
			$id = $data["id"];
			$titre = $data["titre"];
			$description = $data["description"];
			$url = $data["url"];
			$theme = $data["theme"];
			$webmaster = $data["webmaster"];
			$date = date("Y-m-d");
			$affichage = $data["affichage"];
            $sql = "insert into liens (titre,description,url,theme,webmaster,date, affichage) values (?,?,?,?,?,?,?)";
            $this->db->query($sql,array($titre, $description, $url, $theme ,$webmaster,$date ,$affichage));
           
		}


}