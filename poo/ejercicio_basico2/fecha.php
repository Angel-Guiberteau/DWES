<?php
    class Ejemplo{
        private array $cadenaSplit;
        private array $meses_dias;
        private $noBisiesto = false;
        private $ano;
        private $mes;
        private $dia;


        function __construct (){
            $this->meses_dias = array(
                1 => array(
                    "0" => "Enero",
                    "1" => 31
                ),
                2 => array(
                    "0" => "Febrero",
                    "1" => 28 // o 29 en año bisiesto
                ),
                3 => array(
                    "0" => "Marzo",
                    "1" => 31
                ),
                4 => array(
                    "0" => "Abril",
                    "1" => 30
                ),
                5 => array(
                    "0" => "Mayo",
                    "1" => 31
                ),
                6 => array(
                    "0" => "Junio",
                    "1" => 30
                ),
                7 => array(
                    "0" => "Julio",
                    "1" => 31
                ),
                8 => array(
                    "0" => "Agosto",
                    "1" => 31
                ),
                9 => array(
                    "0" => "Septiembre",
                    "1" => 30
                ),
                10 => array(
                    "0" => "Octubre",
                    "1" => 31
                ),
                11 => array(
                    "0" => "Noviembre",
                    "1" => 30
                ),
                12 => array(
                    "0" => "Diciembre",
                    "1" => 31
                )
            );
        }

        function separarCadena($cadena){

                $this->cadenaSplit = explode('-', $cadena);

                $this->ano = (int)$this->cadenaSplit[0]; 
                $this->mes = (int)$this->cadenaSplit[1]; 
                $this->dia = (int)$this->cadenaSplit[2]; 

                $this->bisiesto();
            }

        function bisiesto(){
            if ($this->mes == 2) {
                if ($this->ano % 4 == 0 && ($this->ano % 100 != 0 || $this->ano % 400 == 0)) {
                    $this->meses_dias[2][1] = 29; // Cambia los días de febrero
                    $this->noBisiesto=true; 
                }
            }
        }


        function mostrarFecha() {
            echo  $this->cadenaSplit[2] . " de " . $this->meses_dias[$this->mes][0] . " de " . $this->cadenaSplit[0]."<br>";
        }
            
        function mostrarBisiesto(){
            if($this->noBisiesto == true){
                echo "El año ".$this->ano." es bisiesto por lo que este mes tiene 29 días";
            }
            else
                echo "El mes de ". $this->meses_dias[$this->mes][0]." tiene ".$this->meses_dias[$this->mes][1]." días";
        }

    }
?>