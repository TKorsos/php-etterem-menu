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

    function receptekView() {
        $this->getViewFile("receptek");
    }

    function adatok() {
        $d = getdate();
        $days = $d["wday"];
        $days_arr = ["Vasárnap", "Hétfő", "Kedd", "Szerda", "Csütörtök", "Péntek", "Szombat"];
        $alt_text_arr = ["Májgombócleves", "Fokhagymakrémleves", "Jókai bableves", "Sertésraguleves", "Paradicsomleves", "Csontleves", "Tárkonyos zöldségleves"];
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

    function receptek() {
        $beturend = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

        $receptek_arr = ["almas_fahejas_zabkasa_chia_maggal" => "Almás fahéjas zabkása chia maggal", "fokhagymakremleves" => "Fokhagymakrémleves", "jokai_bableves" => "Jókai bableves", "sertesraguleves" => "Sertésraguleves", "paradicsomleves" => "Paradicsomleves", "csontleves" => "Csontleves", "tarkonyos_zoldsegleves" => "Tárkonyos zöldségleves", "majgombocleves" => "Májgombócleves", "zoldborsofozelek_sult_debrecenivel" => "Zöldborsófőzelék, sült debrecenivel", "roston_harcsa_sajtmartassal_zoldseges_bulgurral" => "Roston harcsa sajtmártással, zöldséges bulgurral", "milanoi_sertesszelet" => "Milánói sertésszelet", "pacalporkolt_fott_burgonyaval" => "Pacalpörkölt, főtt burgonyával", "tanyasi_sertesszelet_kukoricas_rizzsel" => "Tanyasi sertésszelet, kukoricás rizzsel", "aranygaluska_vanilia_sodoval" => "Aranygaluska, vanília sodóval", "kaposztas_cvekedli" => "Káposztás cvekedli", "paradicsomos_tonhalas_teszta" => "Paradicsomos-tonhalas tészta"];

        return [$beturend, $receptek_arr];
    }

    function receptSeged() {
        $hozzavalok = file_get_contents('./views/receptek/'.$_GET["id"][0].'/'. $_GET["id"] .'_h.txt');

        $hozzavalok_arr = explode(",", $hozzavalok, -1);

        $elkeszites = file_get_contents('./views/receptek/'.$_GET["id"][0].'/'. $_GET["id"] .'_e.txt');
                
        $elkeszites_arr = explode(".", $elkeszites, -1);

        return [$hozzavalok_arr, $elkeszites_arr];
    }
}