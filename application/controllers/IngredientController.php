<?php
class IngredientController extends MY_COntroller{
    public function index()
    {
            echo("Hello");
            $this->load->model('IngredientModel');
            $this->load->helper('form');
            $this->load->library('form_validation');            

            $method = $this->input->method();

            if ($method === 'post'){}
            $ingredients=$this->IngredientModel->getall();
            $data =array(
                'ingredients'=>$ingredients,
            );


            $this->renderView('ingredient/ingredient_list',$data);
        }
}
?>