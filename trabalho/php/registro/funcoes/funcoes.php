<?php
    function verificarVeiculo($veiculo){
        if($veiculo=='carro'){
            echo '<div class="registro registro-carro">
            <div class="placa-tipo">
                <div class="placa-veiculo">ZYK4R53</div>
                <img src="img/carro.svg" alt="" class="imagem-veiculo">
            </div>
            <div class="horario horario-registro-2">00:12:53</div>
            <button class="btn-fechar">X</button>
            </div>';
        } else if($veiculo=='moto'){
            echo '<div class="registro registro-moto">
                <div class="placa-tipo">
                    <div class="placa-veiculo">ZYK4R53</div>
                    <img src="img/moto.svg" alt="" class="imagem-veiculo">
                </div>
                <div class="horario horario-registro-2">05:03:08</div>
                <button class="btn-fechar">X</button>
                </div>';
        }
    }
?>