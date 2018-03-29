<?php

class AddController extends MY_Controller {

        public function index()
        {   
                echo "hello";
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
               
                $name= $this->input->post('titre');
                $etape= $this->input->post('step');
                $time_cook= $this->input->post('time_cook');
                $time_make= $this->input->post('time_make');
                
                echo($step);

                $step = array(
                    'id' => '',
                    'description' => $step,
                  );
                echo($name);
                $recipe = array(
                    'id' => '',
                    'name' => $name,
                    'time_make' => $time_make,
                    'time_cook' => $time_make,
                  );
            
                $querry=$this->db->insert('recipe', $recipe);
                $this->db->insert('step',$step);

                    
                if ($querry)
                    {
                        echo "Success!";
                       
                    }
                else
                    {
                            echo "Query failed!";
                    }
                    
           $this->renderView('recipe/insert'); 
                    
        }
}