<?php
    class Tuyendung extends controller{
        function Get_data(){
            $this->view('Masterlayout',[
                'page'=>'Tuyendung'
            ]);
        }
    }
?>