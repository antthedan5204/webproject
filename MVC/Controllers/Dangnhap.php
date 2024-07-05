<?php
    class Dangnhap extends controller{
        function Get_data(){
            $this->view('Masterlayout',[
                'page'=>'Dangnhap'
            ]);
        }
    }
?>