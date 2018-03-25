<?php

class FormController extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('recipe/form');
                }
                else
                {
                        $this->load->view('form');
                }
                
                $querry=$this->db->simple_query('select * from ingredient');
                if ($querry)
                    {
                            echo "Success!";
                            echo $querry;
                    }
                    else
                    {
                            echo "Query failed!";
                    }
                }
                    
        }