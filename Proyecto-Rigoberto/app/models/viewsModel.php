<?php
    namespace app\models;

    class viewsModel{

        protected function obtenerVistasModelo($vista){

            $listaBlanca=["xd", "404"];

            if(in_array($vista, $listaBlanca)){
                if (is_file("./app/views/content/".$vista."-view.php")){
                    $contenido = "./app/views/content/".$vista."-view.php";
                } else {
                    $contenido = "404";
                }
            }elseif($vista=="login") {
                $contenido = "login";
            } else {
                $contenido = "404";
            }

            return $contenido;
        }
    }