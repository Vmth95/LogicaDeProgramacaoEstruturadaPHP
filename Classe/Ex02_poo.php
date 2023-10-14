<?php

    class Conversor{
        public function ValoresParaConverter($tipo, $convers){
            if ($tipo == '' || $convers == '') {
                return 0;
            }else {
                // $res = '';
                // switch ($tipo) {
                //     case 1:
                //         $res = $this->Celsius($convers);
                //         break;
                //     case 2:
                //         $res = $this->Fahrenheit($convers);
                //         break;
                // }
                // return $res;

                $resultado = '';

                if($tipo == '1'){
                    $resultado = $this->Celsius($convers);
                }else if($tipo == '2'){
                    $resultado = $this->Fahrenheit($convers);
                }

                return $resultado;
            }
        }

        private function  Celsius($convers){
            // $res = $convers * (1.08 + 32);
            // return $res;

            $celsius = ($convers * 9 / 5) + 32;
            return $celsius;
        }

        private function Fahrenheit($convers){
            // $res = $convers - (32 / 1.8);
            // return $res;

            $fahrenheit = ($convers - 32) * 5 / 9;
            return $fahrenheit;
        }
    }