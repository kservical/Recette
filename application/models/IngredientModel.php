<?php
class IngredientModel extends CI_Model {


        public function getall()
        {

            $query = $this->db->select('ingredient.name')->from('ingredient');
            $result=$query->get()->result();

            return $result;
        }

        private $id;
        private $libelle;
        private $quantity;
        private $unity;


}