<?php

class GoogleMaps implements Mapa {

    public function getMapa() {
        // lógica para buscar o mapa
        $url = "maps.google.com/maps?q=rua+vergueiro";
        echo "Mapa do google";
    }

}