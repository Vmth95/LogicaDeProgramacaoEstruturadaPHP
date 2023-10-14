<?php

    class Faturamento{
        public function ValoresParaFaturar($meses, $mMensal, $lucro, $perda){
            if ($meses == '' || $mMensal == '' || $lucro == '' || $perda == '') {
                return 0;
            } else {

                $calculo1 = $meses * $mMensal;
                $calculo2 = ($calculo1 * $lucro) / 100;
                $calculo3 = ($calculo1 * $perda) / 100;

                $resultado = ($calculo1 + $calculo2) - $calculo3;
                return $resultado;
            }
        }
    }