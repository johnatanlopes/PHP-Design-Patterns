<?php

class MapLink implements Mapa {

    public function getMapa() {
        // lógica para buscar o mapa
        $url = "maplink.com/maps?q=rua+vergueiro";
        echo "Mapa do MapLink";
    }

}