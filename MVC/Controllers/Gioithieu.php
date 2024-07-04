<?php
    class Gioithieu extends controller{
        function Get_data(){
            $this->view('Masterlayout',[
                'page'=>'Gioithieu'
            ]);
        }
    }
?>