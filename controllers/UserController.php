<?php

namespace controllers;

class UserController {
    use \traits\Utilities;

    function kezdolapView() {
        $this->getViewFile("kezdolap");
    }

    function blogView() {
        $this->getViewFile("blog");
    }

    function rolunkView() {
        $this->getViewFile("rolunk");
    }

    function kapcsolatView() {
        $this->getViewFile("kapcsolat");
    }

    function adatok() {
        $d = getdate();
        $days = $d["wday"];
        $days_arr = ["Vasárnap", "Hétfő", "Kedd", "Szerda", "Csütörtök", "Péntek", "Szombat"];
        $alt_text_arr = ["cica", "cukkini", "sivatag", "sivatagi építmény", "pinty", "sirály", "szajkó"];
        $weeks = $d["yday"] + 1;
        $weeks_index = ceil($weeks / 7);
        $days_index = $days;
        // $days_index = 1;

        return [$days_arr[$days_index], $days_index, $alt_text_arr[$days_index], $weeks_index];
    }

    function menu() {
        // napok magyar
        $days_arr = ["Hétfő", "Kedd", "Szerda", "Csütörtök", "Péntek", "Szombat", "Vasárnap"];
        // reggeli
        $reggeli = ["Almás fahéjas zabkása chia maggal"];
        // levesek
        $ebed_a = ["Fokhagymakrémleves", "Jókai bableves", "Sertésraguleves", "Paradicsomleves", "Csontleves", "Tárkonyos zöldségleves", "Májgombócleves"];
        // főételek
        $ebed_b = ["Zöldborsófőzelék, sült debrecenivel", "Roston harcsa sajtmártással, zöldséges bulgurral", "Milánói sertésszelet", "Pacalpörkölt, főtt burgonyával", "Tanyasi sertésszelet, kukoricás rizzsel", "Aranygaluska, vanília sodóval", "Káposztás cvekedli"];
        // vacsora
        $vacsora = ["Paradicsomos-tonhalas tészta"];

        return [$reggeli, $ebed_a, $ebed_b, $vacsora, $days_arr];
    }
}