<?php

require_once 'Cavaleiro.php';
require_once 'Unidade.php';

class SimularCombate
{
    public function simularCombate(Exercito $exercito1, Exercito $exercito2) {
        $unidadesExercito1 = $exercito1->getUnidades();
        $unidadesExercito2 = $exercito2->getUnidades();

        while (!empty($unidadesExercito1) && !empty($unidadesExercito2)) {
            // Escolha aleatória de uma unidade de cada exército
            $indiceUnidade1 = array_rand($unidadesExercito1);
            $indiceUnidade2 = array_rand($unidadesExercito2);
            $unidade1 = $unidadesExercito1[$indiceUnidade1];
            $unidade2 = $unidadesExercito2[$indiceUnidade2];

            // Combate entre as duas unidades escolhidas aleatoriamente
            $this->combate($unidade1, $unidade2);

            // Remover as unidades que foram derrotadas
            if ($unidade1->getHp() <= 0) {
                unset($unidadesExercito1[$indiceUnidade1]);
                $unidadesExercito1 = array_values($unidadesExercito1);
            }
            if ($unidade2->getHp() <= 0) {
                unset($unidadesExercito2[$indiceUnidade2]);
                $unidadesExercito2 = array_values($unidadesExercito2);
            }
        }

        if (empty($unidadesExercito1)) {
            echo "Exército 2 venceu!\n";
        } else {
            echo "Exército 1 venceu!\n";
        }
    }


    private function combate(Unidade $unidade1, Unidade $unidade2) {
        echo "Iniciando combate entre " . $unidade1->getNome() . " e " . $unidade2->getNome() . "\n";

        // Continua o combate enquanto ambas as unidades estiverem vivas
        while ($unidade1->getHp() > 0 && $unidade2->getHp() > 0) {
            // Ataque da primeira unidade contra a segunda unidade
            $dano1 = $unidade1->getAtaque();

            $unidade1SofreuDano = $unidade2->sofrerDano($dano1);

            // Ataque da segunda unidade contra a primeira unidade
            if (!$unidade1SofreuDano) {
                $dano2 = $unidade2->getAtaque();
                $unidade2SofreuDano = $unidade1->sofrerDano($dano2);

                // Verifica se a segunda unidade foi derrotada
                if ($unidade2SofreuDano) {
                    break;
                }
            }

            // Mostra o estado atual das unidades
            echo $unidade1->getNome() . " (HP: " . $unidade1->getHp() . ") vs " . $unidade2->getNome() . " (HP: " . $unidade2->getHp() . ")\n";
        }

        echo "Combate entre " . $unidade1->getNome() . " e " . $unidade2->getNome() . " concluído\n";

        // Verifica qual unidade foi derrotada
        if ($unidade1->getHp() <= 0) {
            echo $unidade1->getNome() . " foi derrotado!\n";
            return array(null, $unidade2);
        } elseif ($unidade2->getHp() <= 0) {
            echo $unidade2->getNome() . " foi derrotado!\n";
            return array($unidade1, null);
        } else {
            // Ambas as unidades foram derrotadas simultaneamente
            echo "As unidades foram destruídas.\n";
            return array(null, null);
        }
    }
}