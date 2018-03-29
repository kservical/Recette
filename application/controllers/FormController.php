<?php

class FormController extends MY_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
               
                $query=$this->db->select('ingredient.name')->from('ingredient');
                $result=$query->get()->result();
                

                $data =array(
                        'ingredients'=>$result,
                    );
                    
                if ($result)
                    {
                        echo "Success!";
                       
                    }
                else
                    {
                            echo "Query failed!";
                    }
                    
           $this->renderView('recipe/form',$data); 
                    
        }
}