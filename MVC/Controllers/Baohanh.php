<?php
    class Baohanh extends controller{
        function Get_data(){
            $this->view('Masterlayout',[
                'page'=>'Baohanh'
            ]);
        }
    }
?>