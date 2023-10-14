<?php

    class Combustivel{
        public function ValoresCombustivel($qtd, $tipo){
            if ($qtd == '' || $tipo == '') {
                return 0;
            }else{
                $res = '';
                switch ($qtd) {
                    case 1:
                        $res = $this->SomarEtanol($tipo);
                    break;
                    case 2:
                        $res = $this->SomarGasolina($tipo);
                    break;
                }
                return $res;
            }
        }

        private function  SomarEtanol($tipo){
            $res = $tipo * 3.09;
            return $res;
        }

        private function SomarGasolina($tipo){
            $res = 4.10 * $tipo;
            return $res;
        }
    }