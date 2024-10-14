
<?php
    
    class Operaciones{

        private $num1;
        private $num2;


        function __construct($numero1, $numero2){ 
            
            /* 
               Como hay que cambiar siempre el numero lo cambiamos en el constructor 
               Guarda el numero mayor en el num1, ya que asi, siempre pondremos el
               numero mayor primero en las operaciones
            */

            if($numero1 < $numero2){
                $this->num2 = $numero1;
                $this->num1 = $numero2;
            }
            else
            {
                $this->num1 = $numero1;
                $this->num2 = $numero2;
            }
        }

        /* funcion que devuelve el resultado de la operacion que se le pase por parametro */

        public function calcular($operacion){
            switch ($operacion) {

                case 'suma':
                    return $this->suma($this->num1, $this->num2);

                case 'resta':
                    return $this->resta($this->num1, $this->num2);

                case 'multiplicacion':
                    return $this->multiplicacion($this->num1, $this->num2);

                case 'division':
                    return $this->division($this->num1, $this->num2);

            }

        }
        private function suma($num1, $num2){
            return "El resultado de la suma de " . $num1 . " y " . $num2 . " es: " . ($num1 + $num2);
        }

        private function resta($num1, $num2){
            return "El resultado de la resta de " . $num1 . " y " . $num2 . " es: " . ($num1 - $num2);
        }

        private function multiplicacion($num1, $num2){
            return "El resultado de la multiplicacion de " . $num1 . " y " . $num2 . " es: " . ($num1 * $num2);
        }

        private function division($num1, $num2){
            return "El resultado de la division de " . $num1 . " y " . $num2 . " es: " . ($num1 / $num2);
        }

    }

?>