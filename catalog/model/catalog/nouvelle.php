<?php
class ModelCatalogNouvelle extends Model {
    // Récupération de la nouvelle sélectionnée par $nouvelle_id
	public function getNouvelle($nouvelle_id) 
	{
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "nouvelle WHERE id = " . $nouvelle_id . ";");

		if($query->num_rows)
        {
            return $query->row;  // retourne une ligne
        } else {
            return false;
        }
	}

    // Récupération de toutes les nouvelles
	public function getNouvelles() 
	{
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "nouvelle ORDER BY date DESC;");
		
		if($query->num_rows)
		{
			return $query->rows;
		} else {
			return false;
		}
	}
}
?>