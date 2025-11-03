<?php

    // Tipos de Functions:
    // public: Essa função se comunica com todas as camadas da aplicação,
    // permite também a realização de herança!

    // private: Função restrita a Classe na qual ela foi construida,
    // não é possivel realizar herança!

    // static public: Essa função se comunica com todas as camadas da aplicação,
    // permite também a realização de herança porem, "congela" a ação nela desenvolvida!

    // static private: Função restrita a Classe na qual ela foi construida,
    // não é possivel realizar herança porem, "congela" a ação nela desenvolvida!


    class ClassExample{
        public function CalcularCombustivel($qtdLitros, $typeGas){
            if($qtdLitros == '' || $typeGas == ''){
                return 0;
            }else{
                if($typeGas == 1){
                    $resultado = $this->Gasolina($qtdLitros);
                }else if($typeGas == 2){
                    $resultado = $this->Etanol($qtdLitros);
                }else{
                    $resultado = $this->Diesel($qtdLitros);
                }
                return $resultado;
            }
        }

        private function Gasolina($qtdLitros){
            $custo = 4.10;

            $gasolina = $qtdLitros * $custo;

            return $gasolina;
        }

        private function Etanol($qtdLitros){
            $custo = 3.09;

            $etanol = $qtdLitros * $custo;

            return $etanol;
        }

        private function Diesel($qtdLitros){
            $custo = 4.73;

            $diesel = $qtdLitros * $custo;

            return $diesel;
        }

        public function Conversor($unidade, $temp){
            if($unidade == '' || $temp == ''){
                return 0;
            }else{
                if($unidade == 1){
                    $status = $this->Celsius($temp);
                }else if($unidade == 2){
                    $status = $this->Fahrenheit($temp);
                }
                return $status;
            }
        }

        private function Celsius($temp){
            $celsius = round((($temp * 9 / 5) + 32), 2);

            return $celsius;
        }

        private function Fahrenheit($temp){
            $fahrenheit = round((($temp - 32) * 5 / 9), 2);

            return $fahrenheit;
        }

        public function CalcularSalario($meses, $salario, $lucro, $perda){
            if($meses == '' || $salario == '' || $lucro == '' || $perda == ''){
                return 0;
            }else{
                $ganhos = $meses * $salario;
                $totalLucro = ($ganhos * $lucro) / 100;
                $totalPerda = ($ganhos * $perda) / 100;

                $resultado = ($ganhos + $totalLucro) - $totalPerda;

                return number_format($resultado, 2, ',', '.');
            }
        }
    }