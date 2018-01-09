<?php
function nie_pusto($po, $i, $tabelka2)
{
    if (!EMPTY($po[$po[$i]])) {
        echo "<tr>";
        echo "<td class='two'>" . $po[$i] . "</td>";
        echo "<td class='two'></td><td class='cena' id='c_" . $po[$i] . "'></td>";
        echo "<td class='white' id='pic" . $po[$i] . "'></td>";
        echo "<td class='one' id='" . $po[$i] . "'>" . $po[$po[$i]] . "</td>";
        echo "</tr>";
    }
}
function doc_qad($apr, $cla)
{
    if (strpos($apr, 'g.szkop') !== false) {
        echo "<td class=$cla>" . $apr . "<br><span class='nonst_doc'>DOC";
        echo "<span class='opis-content' align='left' style='position:absolute;  background-color: #F8F7F8; padding: 5px 5px;border-radius: 2px;'>";
        echo "<span style='font-size: 16px; '>Documentation is ready</span></span>";
        echo "</span>";
        if (strpos($apr, 'a.garbiec') !== false || strpos($apr, 'm.kuzbinski')) {
            echo "<span> </span><span class='nonst_doc'>QAD";
            echo "<span class='opis-content' align='left' style='position:absolute;  background-color: #F8F7F8; padding: 5px 5px;border-radius: 2px;'>";
            echo "<span style='font-size: 16px; '>Configurator is ready</span></span>";
            echo "</span>";
        } else {
            echo "<span> </span><span class='nonst_qad' style='background: #CCCCCC; color :#7D7B81'>QAD";
            echo "<span class='opis-content' align='left' style='position:absolute;  background-color: #F8F7F8; padding: 5px 5px;border-radius: 2px;'>";
            echo "<span style='font-size: 16px; '>Configurator in QAD is not ready or waiting to be verified</span></span>";
            echo "</span>";
        }
        echo "</td>";
    } else {
        echo "<td class=$cla>" . $apr . "<br><span class='nonst_doc' style='background: #CCCCCC; color :#7D7B81'>DOC";
        echo "<span class='opis-content' align='left' style='position:absolute;  background-color: #F8F7F8; padding: 5px 5px;border-radius: 2px;'>";
        echo "<span style='font-size: 16px;  '>Documentation is not ready or waiting to be verified</span></span>";
        echo "</span></td>";
    }
}
function doc_qad_show($apr, $cla)
{
    if (strpos($apr, 'g.szkop') !== false) {
        echo "<div class='nonst_doc' style='display: inline; position:absolute;'>DOC";
        echo "<span class='opis-content'  style='position:absolute;  border-radius: 2px;  background-color: #F8F7F8; padding: 5px 5px;'>";
        echo "<span align='center' style='font-size: 16px; white-space:nowrap;'>Documentation is ready</span></span>";
        echo "</div>";
    }
}
function jesli_nie_opcja($po, $i, $tabelka2,$col3,$po3)
{


    $czy      = 0;
    $naglowki = $tabelka2[0];
    $tabel2   = $tabelka2[1];

    for ($r = 0; $r < 16; $r++) {      // 16 jeli się doda kolumny to trzeba zmienić
    //print_r($p3[$po[$i]]);
    //echo "<br>";
        if ($naglowki[$r] == $po[$i]) {
            $czy       = 1;
            $scategory = array_values(array_unique(array_column($tabel2, $r)));
            echo "<td class='one'>";
            echo "<div class='dropdown'>";
            // print_r($col3);
           // if ($po[$po[$i]]==remove_line($col3)){
            //print_r($col3);
            //}
            echo "<button class='dropbtn2'  name='" . $scategory[$n][$i] . "' onclick='buton_menu(this)'
                              id='" . $po[$i] . "' >" . $col3. "</button>"; //$po[$po[$i]]       $col3[$i+7]
            echo "<div  class='dropdown-content' id='drop_" . $po[$i] . "'>";
            search_access($po[$i], $scategory);
            for ($i2 = 0; $i2 < count($scategory); ++$i2) {
                if ($scategory[$i2] != null) {
                    echo "<a id='" . $scategory[$i2] . "'  style='display:block;cursor: pointer;' name='" . $po[$i] . "' value=$r onclick='showUser_new(this)'>" . $scategory[$i2] . "</a>";
                }
            }
            echo "</div></td>";
        } else {
        }
    }
    if ($czy == 0) {
        echo "<td class='one' id='" . $po[$i] . "'>" . $col3 . "</td>";
    }
}
function get_konfigurator()
{
    $link      = linkSQL();
    $queryop1  = "SELECT * FROM konfig";
    $resultop1 = mysqli_query($link, $queryop1);
    $x         = 0;
    while ($row1 = mysqli_fetch_array($resultop1)) {
        for ($y = 0; $y < count($row1); $y++) {
            if (isset($row1[$y])) {
                $col[$x][$y] = $row1[$y];
            }
        }
        $x = $x + 1;
    }
    return $col;
}
function get_price($zam)
{
    $link      = linkSQL();
    $queryop1  = "SELECT * FROM zapisane WHERE `Order No` LIKE '".$zam."' ORDER BY `wersja` DESC";
   // print_r($queryop1);
    $resultop1 = mysqli_query($link, $queryop1);
    $x         = 0;
    while ($row1 = mysqli_fetch_array($resultop1)) {
        for ($y = 0; $y < count($row1); $y++) {
            if (isset($row1[$y])) {
                $col[$x][$y] = $row1[$y];
            }
        }
        $x = $x + 1;
    }
    return $col;
}
function get_nadwozie_bez_naglowkow()
{
    $link      = linkSQL();
    $queryop1  = "SELECT * FROM nadwozie";
    $resultop1 = mysqli_query($link, $queryop1);
    $x         = 0;
    while ($row1 = mysqli_fetch_array($resultop1)) {
        for ($y = 0; $y < count($row1); $y++) {
            if (isset($row1[$y])) {
                $col[$x][$y] = $row1[$y];
            }
        }
        $x = $x + 1;
    }
    return $col;
}
function get_nadwozie()
{
    $link   = linkSQL();
    $tab    = "nadwozie";
    $query  = "SELECT * FROM $tab";
    $result = mysqli_query($link, $query);
    if (!$result) {
        die('Invalid quer2y:1 ' . mysql_error());
    }
    $kolumny    = "SHOW COLUMNS FROM $tab";
    $result_kol = mysqli_query($link, $kolumny);
    if (!$result_kol) {
        die('Invalid query: ' . mysql_error());
    }
    $x  = 0;
    $x2 = 0;
    while ($row1 = mysqli_fetch_array($result_kol)) {
        $tytul[$x] = $row1[0];
        $x         = $x + 1;
    }
    while ($row = mysqli_fetch_array($result)) {
        for ($i = 0; $i < count($tytul); ++$i) {
            $tabelka[$x2][$i] = $row[$tytul[$i]];
        }
        $x2 = $x2 + 1;
    }
    $wynik[0] = $tytul;
    $wynik[1] = $tabelka;
    return $wynik;
}
function get_table2()
{
    $link   = linkSQL();
    $tab    = "TABLE2";
    $query  = "SELECT * FROM $tab";
    $result = mysqli_query($link, $query);
    if (!$result) {
        die('Invalid quer2y:2 ' . mysql_error());
    }
    $kolumny    = "SHOW COLUMNS FROM $tab";
    $result_kol = mysqli_query($link, $kolumny);
    if (!$result_kol) {
        die('Invalid query: ' . mysql_error());
    }
    $x  = 0;
    $x2 = 0;
    while ($row1 = mysqli_fetch_array($result_kol)) {
        $tytul[$x] = $row1[0];
        $x         = $x + 1;
    }
    while ($row = mysqli_fetch_array($result)) {
        for ($i = 0; $i < count($tytul); ++$i) {
            $tabelka[$x2][$i] = $row[$tytul[$i]];
        }
        $x2 = $x2 + 1;
    }
    $wynik[0] = $tytul;
    $wynik[1] = $tabelka;
    return $wynik;
}
function indeksy()
{
    include("config_0.php");
    $tab  = "indeksy";
    $link = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if (!$link->set_charset("utf8")) {
        printf("Error loading character set utf8: %s\n", $link->error);
    } else {
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $query  = "SELECT `COL 1`,`COL 2` FROM `indeksy`";
    $result = mysqli_query($link, $query);
    $m      = 0;
    while ($row1 = mysqli_fetch_array($result)) {
        $col[$m]  = $row1[1];
        $szuk[$m] = $row1[0];
        ++$m;
    }
    $a[0] = $szuk;
    $a[1] = $col;
    return $a;
}
function loadtable()
{
    include("config_0.php");
    $tab  = "TABLE2";
    $link = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie można ustawić databasy : ' . mysql_error());
    }
    $query  = "SELECT * FROM $tab";
    $result = mysqli_query($link, $query);
    if (!$result) {
        die('Invalid quer2y:3 ' . mysql_error());
    }
    $kolumny    = "SHOW COLUMNS FROM $tab";
    $result_kol = mysqli_query($link, $kolumny);
    if (!$result_kol) {
        die('Invalid query: ' . mysql_error());
    }
    $x  = 0;
    $x2 = 0;
    while ($row1 = mysqli_fetch_array($result_kol)) {
        $GLOBALS['tytuly'][$x] = $row1[0];
        $tytul[$x]             = $row1[0];
        $x                     = $x + 1;
    }
    while ($row = mysqli_fetch_array($result)) {
        for ($i = 0; $i < count($tytul); ++$i) {
            $GLOBALS['wier'][$x2][$i] = $row[$tytul[$i]];
        }
        $x2 = $x2 + 1;
    }
}
function tabla($war2, $col2)
{
    $war = explode('?', $war2, -1);
    $col = explode('?', $col2, -1);
    include("config_0.php");
    $tab  = "TABLE2";
    $link = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $query = "SELECT * FROM $tab WHERE";
    $li    = 0;
    for ($l = 0; $l < count($war); ++$l) {
        if ($col[$l] !== "0") {
            if ($li == 0) {
                $query = "$query `$col[$l]` LIKE '$war[$l]'";
            } else {
                $query = "$query AND`$col[$l]` LIKE '$war[$l]'";
            }
            $li = $li + 1;
        }
    }
    $result = mysqli_query($link, $query);
    if (!$result) {
        die('Invalid quer2y:4 ' . mysql_error());
    }
    $kolumny    = "SHOW COLUMNS FROM $tab";
    $result_kol = mysqli_query($link, $kolumny);
    if (!$result_kol) {
        die('Invalid query: ' . mysql_error());
    }
    echo "<table class='one' style='width:100%' margin-top: 500px>";
    echo "<tr>";
    $x  = 0;
    $x2 = 0;
    while ($row1 = mysqli_fetch_array($result_kol)) {
        echo "<td class='three'>" . $row1[0] . "</td>";
        $GLOBALS['tytuly'][$x] = $row1[0];
        $tytul[$x]             = $row1[0];
        $x                     = $x + 1;
    }
    echo "<tr>";
    while ($row = mysqli_fetch_array($result)) {
        for ($i = 0; $i < count($tytul); ++$i) {
            echo "<td class='four'>" . $row[$tytul[$i]] . "</td>";
            $GLOBALS['wier'][$x2][$i] = $row[$tytul[$i]];
        }
        echo "</tr>";
    }
    $x2 = $x2 + 1;
    echo "</table><br>";
}
function linkSQL()
{
    include("config_0.php");
    $link = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    return $link;
}
function get_temp()
{
    $link      = linkSQL();
    $queryop1  = "SELECT `wys` FROM `temp` WHERE `a` = 1";
    $resultop1 = mysqli_query($link, $queryop1);
    while ($rowop1 = mysqli_fetch_array($resultop1)) {
        $opcje = $rowop1[0];
    }
    print_r($opcje);
    return $opcjeall;
}
function set_temp($wys)
{
    $link = linkSQL();
    $sql  = "UPDATE temp SET wys='" . $wys . "' WHERE a='1'";
    if (mysqli_query($link, $sql)) {
    } else {
        echo "Error set temp:Not saved" . mysqli_error();
    }
}
function getopcje()
{
    $link      = linkSQL();
    $queryop1  = "SELECT `COL 1` FROM `opcje`";
    $resultop1 = mysqli_query($link, $queryop1);
    $lop1      = 0;
    while ($rowop1 = mysqli_fetch_array($resultop1)) {
        $opcje[$lop1] = $rowop1[0];
        $lop1         = $lop1 + 1;
    }
    $queryopall  = "SELECT * FROM `opcje`";
    $resultopall = mysqli_query($link, $queryopall);
    while ($rowop1 = mysqli_fetch_array($resultopall)) {
        $opcjeall[$rowop1[0]] = notnull($rowop1);
    }
    return $opcjeall;
}
function tablaopcje($war2, $col2)
{
    $war = explode('?', $war2, -1);
    $col = explode('?', $col2, -1);
    include("config_0.php");
    $tab   = "TABLE2";
    $tabop = "opcje";
    $link  = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $query   = "SELECT * FROM $tab WHERE";
    $queryop = "SELECT * FROM $tabop WHERE 'COL1' LIKE 'tank_rear'";
    $li      = 0;
    for ($l = 0; $l < count($war); ++$l) {
        if ($col[$l] !== "0") {
            if ($li == 0) {
                $query = "$query `$col[$l]` LIKE '$war[$l]'";
            } else {
                $query = "$query AND`$col[$l]` LIKE '$war[$l]'";
            }
            $li = $li + 1;
        }
    }
    $result   = mysqli_query($link, $query);
    $resultop = mysqli_query($link, $queryop);
    if (!$result) {
        die('Invalid quer2y:5 ' . mysql_error());
    }
    $kolumny    = "SHOW COLUMNS FROM $tab";
    $result_kol = mysqli_query($link, $kolumny);
    if (!$result_kol) {
        die('Invalid query: ' . mysql_error());
    }
    echo "<table class='one' style='width:100%' margin-top: 500px>";
    echo "<tr>";
    $x  = 0;
    $x2 = 0;
    while ($row1 = mysqli_fetch_array($result_kol)) {
        echo "<td class='three'>" . $row1[0] . "</td>";
        $GLOBALS['tytuly'][$x] = $row1[0];
        $tytul[$x]             = $row1[0];
        $x                     = $x + 1;
    }
    echo "<tr>";
    while ($row = mysqli_fetch_array($result)) {
        for ($i = 0; $i < count($tytul); ++$i) {
            echo "<td class='four'>" . $row[$tytul[$i]] . "</td>";
            $GLOBALS['wier'][$x2][$i] = $row[$tytul[$i]];
        }
        echo "</tr>";
    }
    $x2 = $x2 + 1;
    echo "</table><br>";
}
function vertablaopcje_new($war2, $col2)
{
    $price = 0;
    $tg0   = tlumacz_grup();
    $tg    = $tg0[0];
    $cena  = $tg0[1];
    $war   = explode('?', $war2, -1);
    $col   = explode('?', $col2, -1);
    include("config_0.php");
    $tab    = "TABLE2";
    $tabop  = "opcje";
    $tabrys = "rysunki";
?>

          <?php
    $link = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $query     = "SELECT * FROM $tab WHERE";
    $queryop1  = "SELECT `COL 1` FROM `opcje`";
    $resultop1 = mysqli_query($link, $queryop1);
    $lop1      = 0;
    while ($rowop1 = mysqli_fetch_array($resultop1)) {
        $opcje[$lop1] = $rowop1[0];
        $lop1         = $lop1 + 1;
    }
    $op1         = "tank_rear";
    $queryop     = "SELECT * FROM `opcje` WHERE `COL 1` LIKE '$op1'";
    $queryopall  = "SELECT * FROM `opcje`";
    $resultopall = mysqli_query($link, $queryopall);
    $lopall      = 0;
    while ($rowop1 = mysqli_fetch_array($resultopall)) {
        $opcjeall[$rowop1[0]] = notnull($rowop1);
        $lopall               = $lopall + 1;
    }
    $li = 0;
    for ($l = 0; $l < count($war); ++$l) {
        if ($col[$l] !== "0") {
            if ($li == 0) {
                $query = "$query `$col[$l]` LIKE '$war[$l]'";
            } else {
                $query = "$query AND`$col[$l]` LIKE '$war[$l]'";
            }
            $li = $li + 1;
        }
    }
    $result   = mysqli_query($link, $query);
    $resultop = mysqli_query($link, $queryop);
    if (!$result) {
        die('Invalid quer2y:6 ' . mysql_error());
    }
    if (!$resultop) {
        die('Invalid quer2y for options: ' . mysql_error());
    }
    $kolumny    = "SHOW COLUMNS FROM $tab";
    $result_kol = mysqli_query($link, $kolumny);
    if (!$result_kol) {
        die('Invalid query: ' . mysql_error());
    }
    while ($rowop = mysqli_fetch_array($resultop, MYSQLI_NUM)) {
        $opc = notnull($rowop);
    }
    $x  = 0;
    $x2 = 0;
    while ($row1 = mysqli_fetch_array($result_kol)) {
        $GLOBALS['tytuly'][$x] = $row1[0];
        $tytul[$x]             = $row1[0];
        $x                     = $x + 1;
    }
    while ($row = mysqli_fetch_array($result)) {
        $dane = $row;
    }
    echo "<table class='one' id='tabelka_start' style='width:100%' margin-top: 500px>";
    include('client.php');
    $tabend    = nie0opcje($opcje, $tytul, $dane);
    $colory    = 0;
    $tytul     = $tabend[2];
    $dane      = $tabend[0];
    $czy_opcja = $tabend[1];
    for ($i = 0; $i < count($tytul); ++$i) {
        if ($tytul[$i] == "wheels*") {
            $szczeg = rozbij_opony($opcjeall[$dane[$i]], 1);
            echo "<tr>";
            echo "<td class='two'>" . $tytul[$i] . "</td>";
            echo "<td class='one' id='opo_" . $tytul[$i] . "'><input type='number' id='ile_opon' onchange='ilosc(this)'
              name='quantity' min='0' max='9' value='" . $szczeg[0][1] . "' style='width:40px;'> ";
            przycisk_n($szczeg[1], "opony", "tire");
            echo ", <input type='number' id='ile_felg' onchange='ilosc(this)' name='quantity' min='0' max='9' value='" . $szczeg[0][1] . "' style='width:40px;'> ";
            przycisk_n($szczeg[3], "felgi", "rims");
            echo "<h1 id='" . $tytul[$i] . "' class='ukryte'>6x tire, 6x rims</h1>";
            echo "</td>";
            echo "<td class='cena' id='c_" . $tytul[$i] . "'></td>";
            echo "</tr>";
        } else {
            if (!($tytul[$i] == "ride height" || $tytul[$i] == "min unloaded height" || $tytul[$i] == "Mass of welded chassis (W2) [kg]")) {
                if ($tytul[$i] == "Frame") {
                    $colory = 1;
                }
                echo "<tr>";
                if ($colory == 0) {
                    echo "<td class='two'>" . $tytul[$i] . "</td>";
                } else {
                    echo "<td class='four'>" . $tytul[$i] . "</td>";
                }
                if (isset($czy_opcja[$i])) {
                    echo "<td class='one'>";
                    echo "<div class='dropdownn'>";
                    if ($colory == 0) {
                        echo "<button class='dropbtnn' onclick='buton_menu(this)' id='" . $tytul[$i] . "'>Choose</button>";
                    } else {
                        if ($tytul[$i] == 'tarpaulin No.') {
                            $plandeka = 0;
                            echo "<button class='dropbtn2n' onclick='buton_menu_tarp(this)' id='" . $tytul[$i] . "' plandeka='" . $plandeka . "'>" . $opcjeall[$dane[$i]][1] . "</button>";
                        } else {
                            echo "<button class='dropbtnn' onclick='buton_menu(this)' id='" . $tytul[$i] . "'>" . $opcjeall[$dane[$i]][1] . "</button>";
                        }
                    }
                    echo "<div  class='dropdown-contentn' id='drop_" . $tytul[$i] . "'>";
                    
                    //print_r($rys[$opcjeall[$dane[$i]][$p]]);
                    search_access($tytul[$i], $opcjeall[$dane[$i]]);
                    for ($p = 1; $p < count($opcjeall[$dane[$i]]); ++$p) {
                        echo "<a style='display:block;cursor: pointer;' id='" . $opcjeall[$dane[$i]][$p] . "' name='" . $tytul[$i] . "'  onclick='chooser_tarp_new(this)'>" . $opcjeall[$dane[$i]][$p] . "</a>";
                    }
                    echo "<td class='cena' id='c_" . $tytul[$i] . "'>" . tlumacz5($dane[$i], $cena, $tytul[$i]) . "</td>";
                    echo "</div></td><td class='white' id='pic" . $tytul[$i] . "' alt='No picture' ></td>";
                } else {
                    echo "<td class='one' id='" . $tytul[$i] . "'>" . $dane[$i] . "</td>";
                    $b     = tlumacz5($dane[$i], $cena, $tytul[$i]);
                    $price = $price + $b;
                    echo "<td class='cena' id='c_" . $tytul[$i] . "' width='20'>" . $b . "</td>";
                    $dane1 = str_replace("/", "", $dane[$i]);
                    if (file_exists("images/" . $dane1 . ".png")) {
                        echo "<td class='white'><a href='images/" . $dane1 . ".png' class='rys' target='_blank'><img src='images/" . $dane1 . ".png' class='resize' alt='' ></a></td>";
                    }
                }
                echo "</tr>";
            }
        }
    }
    echo "<td class='two'>Non standard description</td>";
    echo "<td class='one'><textarea name='comment' id='comment' style='width:90%;height:150px;'></textarea></td>";
    echo "</table><br>";
   // echo "<div><p align='right' style='position:fixed; right:50px; bottom:10px;'>total price:</p>";
   // echo "<p id='total_cena' align='right' style='position:fixed; right:10px; bottom:10px;'>" . $price . "</p></div>";
    $tab  = remowchoos($tytul, $tytul);
    $col1 = join("?", $tab[0]);
    $col2 = join("?", $tab[1]);
    include('session_guest.php');
    if (!isset($user_check) || $user_check == "guest") {
        print_r('you must be logged to save');
    } else {
        echo "Order No:<br>";
        echo "<input type='text' name='Order No.' id='Order No.' size='100'><br>";
        echo "<button id='save_button' col1='" . $col1 . "' col2='" . $col2 . "' onclick='ssave(this)' user='" . $user_check . "' order='" . $c_d . "'>save</button>";
    }
}
function vertablaopcje($war2, $col2)
{
    $price = 0;
    $tg0   = tlumacz_grup();
    $tg    = $tg0[0];
    $cena  = $tg0[1];
    $war   = explode('?', $war2, -1);
    $col   = explode('?', $col2, -1);
    include("config_0.php");
    $tab    = "TABLE2";
    $tabop  = "opcje";
    $tabrys = "rysunki";
?>

          <?php
    $link = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $query     = "SELECT * FROM $tab WHERE";
    $queryop1  = "SELECT `COL 1` FROM `opcje`";
    $resultop1 = mysqli_query($link, $queryop1);
    $lop1      = 0;
    while ($rowop1 = mysqli_fetch_array($resultop1)) {
        $opcje[$lop1] = $rowop1[0];
        $lop1         = $lop1 + 1;
    }
    $op1         = "tank_rear";
    $queryop     = "SELECT * FROM `opcje` WHERE `COL 1` LIKE '$op1'";
    $queryopall  = "SELECT * FROM `opcje`";
    $resultopall = mysqli_query($link, $queryopall);
    $lopall      = 0;
    while ($rowop1 = mysqli_fetch_array($resultopall)) {
        $opcjeall[$rowop1[0]] = notnull($rowop1);
        $lopall               = $lopall + 1;
    }
    $li = 0;
    for ($l = 0; $l < count($war); ++$l) {
        if ($col[$l] !== "0") {
            if ($li == 0) {
                $query = "$query `$col[$l]` LIKE '$war[$l]'";
            } else {
                $query = "$query AND`$col[$l]` LIKE '$war[$l]'";
            }
            $li = $li + 1;
        }
    }
    $result   = mysqli_query($link, $query);
    $resultop = mysqli_query($link, $queryop);
    if (!$result) {
        die('Invalid quer2y:7 ' . mysql_error());
    }
    if (!$resultop) {
        die('Invalid quer2y for options: ' . mysql_error());
    }
    $kolumny    = "SHOW COLUMNS FROM $tab";
    $result_kol = mysqli_query($link, $kolumny);
    if (!$result_kol) {
        die('Invalid query: ' . mysql_error());
    }
    while ($rowop = mysqli_fetch_array($resultop, MYSQLI_NUM)) {
        $opc = notnull($rowop);
    }
    $x  = 0;
    $x2 = 0;
    while ($row1 = mysqli_fetch_array($result_kol)) {
        $GLOBALS['tytuly'][$x] = $row1[0];
        $tytul[$x]             = $row1[0];
        $x                     = $x + 1;
    }
    while ($row = mysqli_fetch_array($result)) {
        $dane = $row;
    }
    echo "<table class='one' id='tabelka_start' style='width:100%' margin-top: 500px>";
    include('client.php');
    $tabend    = nie0opcje($opcje, $tytul, $dane);
    $colory    = 0;
    $tytul     = $tabend[2];
    $dane      = $tabend[0];
    $czy_opcja = $tabend[1];
    for ($i = 0; $i < count($tytul); ++$i) {
        if ($tytul[$i] == "wheels*") {
            $szczeg = rozbij_opony($opcjeall[$dane[$i]], 1);
            echo "<tr>";
            echo "<td class='two'>" . $tytul[$i] . "</td>";
            echo "<td class='one' id='opo_" . $tytul[$i] . "'><input type='number' id='ile_opon' onchange='ilosc(this)'
              name='quantity' min='0' max='9' value='6' style='width:40px;'> ";
            przycisk_n($szczeg[1], "opony", "tire");
            echo ", <input type='number' id='ile_felg' onchange='ilosc(this)' name='quantity' min='0' max='9' value='6' style='width:40px;'> ";
            przycisk_n($szczeg[3], "felgi", "rims");
            echo "<h1 id='" . $tytul[$i] . "' class='ukryte'>6x tire, 6x rims</h1>";
            echo "</td>";
            echo "<td class='cena' id='c_" . $tytul[$i] . "'></td>";
            echo "</tr>";
        } else {
            if (!($tytul[$i] == "ride height" || $tytul[$i] == "min unloaded height" || $tytul[$i] == "Mass of welded chassis (W2) [kg]")) {
                if ($tytul[$i] == "Frame") {
                    $colory = 1;
                }
                echo "<tr>";
                if ($colory == 0) {
                    echo "<td class='two'>" . $tytul[$i] . "</td>";
                } else {
                    echo "<td class='four'>" . $tytul[$i] . "</td>";
                }
                if (isset($czy_opcja[$i])) {
                    echo "<td class='one'>";
                    echo "<div class='dropdownn'>";
                    if ($colory == 0) {
                        echo "<button class='dropbtnn' onclick='buton_menu(this)' id='" . $tytul[$i] . "'>Choose</button>";
                    } else {
                        if ($tytul[$i] == 'tarpaulin No.') {
                            $plandeka = 0;
                            echo "<button class='dropbtn2n' onclick='buton_menu_tarp(this)' id='" . $tytul[$i] . "' plandeka='" . $plandeka . "'>" . $opcjeall[$dane[$i]][1] . "</button>";
                        } else {
                            echo "<button class='dropbtnn' onclick='buton_menu(this)' id='" . $tytul[$i] . "'>" . $opcjeall[$dane[$i]][1] . "</button>";
                        }
                    }
                    echo "<div  class='dropdown-contentn' id='drop_" . $tytul[$i] . "'>";
                    for ($p = 1; $p < count($opcjeall[$dane[$i]]); ++$p) {
                        echo "<a  id='" . $opcjeall[$dane[$i]][$p] . "' name='" . $tytul[$i] . "'  onclick='chooser_tarp_new(this)'>" . $opcjeall[$dane[$i]][$p] . "</a>";
                    }
                    echo "<td class='cena' id='c_" . $tytul[$i] . "'>" . tlumacz5($dane[$i], $cena, $tytul[$i]) . "</td>";
                    echo "</div></td><td class='white' id='pic" . $tytul[$i] . "' alt='No picture' ></td>";
                } else {
                    echo "<td class='one' id='" . $tytul[$i] . "'>" . $dane[$i] . "</td>";
                    $b     = tlumacz5($dane[$i], $cena, $tytul[$i]);
                    $price = $price + $b;
                    echo "<td class='cena' id='c_" . $tytul[$i] . "' width='20'>" . $b . "</td>";
                    $dane1 = str_replace("/", "", $dane[$i]);
                    if (file_exists("images/" . $dane1 . ".png")) {
                        echo "<td class='white'><a href='images/" . $dane1 . ".png' class='rys' target='_blank'><img src='images/" . $dane1 . ".png' class='resize' alt='' ></a></td>";
                    }
                }
                echo "</tr>";
            }
        }
    }
    echo "<td class='two'>Non standard description</td>";
    echo "<td class='one'><textarea name='comment' id='comment' style='width:90%;height:150px;'></textarea></td>";
    echo "</table><br>";
    //echo "<div><p align='right' style='position:fixed; right:50px; bottom:10px;'>total price:</p>";
    //echo "<p id='total_cena' align='right' style='position:fixed; right:10px; bottom:10px;'>" . $price . "</p></div>";
    $tab  = remowchoos($tytul, $tytul);
    $col1 = join("?", $tab[0]);
    $col2 = join("?", $tab[1]);
    include('session_guest.php');
    if (!isset($user_check)) {
        print_r('you must be logged to save');
    } else {
        echo "Order No:<br>";
        echo "<input type='text' name='Order No.' id='Order No.' size='100'><br>";
        echo "<button id='save_button'  col1='" . $col1 . "' col2='" . $col2 . "' onclick='ssave(this)' user='" . $user_check . "' order='" . $c_d . "'>save</button>";
    }
}
function nie0opcje($opcje, $tytul, $dane)
{
    $n             = 0;
    $n0            = 0;
    $opcje_wier[0] = NULL;
    for ($i = 0; $i < count($tytul); ++$i) {
        for ($i2 = 0; $i2 < count($opcje); ++$i2) {
            if ($dane[$tytul[$i]] == $opcje[$i2]) {
                $kol1[$n]       = $dane[$tytul[$i]];
                $kol0[$n]       = $tytul[$i];
                $opcje_wier[$n] = 1;
                $n              = $n + 1;
                $n0             = 1;
            }
        }
        if (!empty($dane[$tytul[$i]]) AND $n0 <> 1) {
            $kol1[$n] = $dane[$tytul[$i]];
            $kol0[$n] = $tytul[$i];
            $n        = $n + 1;
        }
        $n0 = 0;
    }
    return array(
        $kol1,
        $opcje_wier,
        $kol0
    );
}
;
function vertabla($war2, $col2)
{
    $war = explode('?', $war2, -1);
    $col = explode('?', $col2, -1);
    include("config_0.php");
    $tab  = "TABLE2";
    $link = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $query = "SELECT * FROM $tab WHERE";
    $li    = 0;
    for ($l = 0; $l < count($war); ++$l) {
        if ($col[$l] !== "0") {
            if ($li == 0) {
                $query = "$query `$col[$l]` LIKE '$war[$l]'";
            } else {
                $query = "$query AND`$col[$l]` LIKE '$war[$l]'";
            }
            $li = $li + 1;
        }
    }
    $result = mysqli_query($link, $query);
    if (!$result) {
        die('Invalid quer2y:8 ' . mysql_error());
    }
    $kolumny    = "SHOW COLUMNS FROM $tab";
    $result_kol = mysqli_query($link, $kolumny);
    if (!$result_kol) {
        die('Invalid query: ' . mysql_error());
    }
    echo "<table class='one' style='width:100%' margin-top: 500px>";
    $x  = 0;
    $x2 = 0;
    while ($row1 = mysqli_fetch_array($result_kol)) {
        $GLOBALS['tytuly'][$x] = $row1[0];
        $tytul[$x]             = $row1[0];
        $x                     = $x + 1;
    }
    while ($row = mysqli_fetch_array($result)) {
        for ($i = 0; $i < count($tytul); ++$i) {
            echo "<tr>";
            echo "<td class='two'>" . $tytul[$i] . "</td>";
            echo "<td class='one'>" . $row[$tytul[$i]] . "</td>";
            $GLOBALS['wier'][$x2][$i] = $row[$tytul[$i]];
            echo "</tr>";
            if ($tytul[$i] == "Category") {
                echo "<tr>";
                echo "<td class='two'>" . $tytul[$i] . " pic</td>";
                echo "<td class='one'><img src='images/" . $row[$tytul[$i]] . ".JPG' class='resize' alt='NO picture' ></td>";
                echo "</tr>";
            }
        }
    }
    $x2 = $x2 + 1;
    echo "</table><br>";
}
function tablanotab_new($war2, $col2)
{
    $war = explode('?', $war2, -1);
    $col = explode('?', $col2, -1);
    include("config_0.php");
    $tab  = "TABLE2";
    $link = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $query = "SELECT * FROM $tab WHERE";
    $li    = 0;
    for ($l = 0; $l < count($war); ++$l) {
        if ($col[$l] !== "0") {
            if ($li == 0) {
                $query = "$query `$col[$l]` LIKE '$war[$l]'";
            } else {
                $query = "$query AND`$col[$l]` LIKE '$war[$l]'";
            }
            $li = $li + 1;
        }
    }
    $result = mysqli_query($link, $query);
    if (!$result) {
        die('Invalid quer2y:9 ' . mysql_error());
    }
    $kolumny    = "SHOW COLUMNS FROM $tab";
    $result_kol = mysqli_query($link, $kolumny);
    if (!$result_kol) {
        die('Invalid query: ' . mysql_error());
    }
    echo "<table class='one' style='width:100%' margin-top: 500px>";
    $x  = 0;
    $x2 = 0;
    while ($row1 = mysqli_fetch_array($result_kol)) {
        $GLOBALS['tytuly'][$x] = $row1[0];
        $tytul[$x]             = $row1[0];
        $x                     = $x + 1;
    }
    while ($row = mysqli_fetch_array($result)) {
        for ($i = 0; $i < count($tytul); ++$i) {
            $GLOBALS['wier'][$x2][$i] = $row[$tytul[$i]];
        }
        $x2 = $x2 + 1;
    }
}
function tablanotab($war2, $col2)
{
    $war = explode('?', $war2, -1);
    $col = explode('?', $col2, -1);
    include("config_0.php");
    $tab  = "TABLE2";
    $link = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $query = "SELECT * FROM $tab WHERE";
    $li    = 0;
    for ($l = 0; $l < count($war); ++$l) {
        if ($col[$l] !== "0") {
            if ($li == 0) {
                $query = "$query `$col[$l]` LIKE '$war[$l]'";
            } else {
                $query = "$query AND`$col[$l]` LIKE '$war[$l]'";
            }
            $li = $li + 1;
        }
    }
    $result = mysqli_query($link, $query);
    if (!$result) {
        die('Invalid quer2y:10 ' . mysql_error());
    }
    $kolumny    = "SHOW COLUMNS FROM $tab";
    $result_kol = mysqli_query($link, $kolumny);
    if (!$result_kol) {
        die('Invalid query: ' . mysql_error());
    }
    echo "<table class='one' style='width:100%' margin-top: 500px>";
    $x  = 0;
    $x2 = 0;
    while ($row1 = mysqli_fetch_array($result_kol)) {
        $GLOBALS['tytuly'][$x] = $row1[0];
        $tytul[$x]             = $row1[0];
        $x                     = $x + 1;
    }
    while ($row = mysqli_fetch_array($result)) {
        for ($i = 0; $i < count($tytul); ++$i) {
            $GLOBALS['wier'][$x2][$i] = $row[$tytul[$i]];
        }
        $x2 = $x2 + 1;
    }
}
function tabelaphp($wier)
{
    print_r(array_column($wier, 0));
}
function glwar($wier, $tytuly, $war2, $col2)
{
    $war = explode('?', $war2, -1);
    $col = explode('?', $col2, -1);
    if (count($wier) == 0) {
    } else {
        for ($j = 0; $j < count($tytuly); ++$j) {
            $scategory[$j] = array_values(array_unique(array_column($wier, $j)));
        }
        echo "<div class='menu-wrap' id='header'>";
        echo "<nav class='menu'>";
        echo "<ul class='clearfix' id='ech'>";
        for ($n = 2; $n < 15; ++$n) {
            if ($tytuly[$n] != "wheels*") {
                if ($war[$n] == "0" AND count($scategory[$n]) > 1) {
                    echo "<li>";
                    echo "<a  id='" . $tytuly[$n] . "'>" . $tytuly[$n] . "</a>";
                    echo "<ul class='sub-menu' id='moz'>";
                    for ($i = 0; $i < count($scategory[$n]); ++$i) {
                        echo "<li><a  id='" . $tytuly[$n] . "'  value=$n name='" . $scategory[$n][$i] . "' onclick='showUser(this)' >" . $scategory[$n][$i] . "</a></li>";
                    }
                    echo "</ul>";
                    echo "</li>";
                } else {
                }
            }
        }
    }
    echo "<br>";
}
function glwar_new($wier, $tytuly, $war2, $col2)
{
    $war = explode('?', $war2, -1);
    $col = explode('?', $col2, -1);
    if (count($wier) == 0) {
    } else {
    //print_r($wier);
        for ($j = 0; $j < count($tytuly); ++$j) {
            $scategory[$j] = array_values(array_unique(array_column($wier, $j)));
            if (count($scategory[$j]) == 1 && $j < 17) {
                $sc[$tytuly[$j]] = $wier[0][$j];
                //print_r($tytuly);
            }
        }

        echo "<table id='txtHint_2nd' class='one' style='width:100%' margin-top: 500px>";
        for ($n = 0; $n < 17; ++$n) {
            if ($tytuly[$n] != "wheels*" && $tytuly[$n] != "Typ") {
                if ($war[$n] == "0" AND count($scategory[$n]) > 1) {
                    echo "<tr>";
                    echo "<td class='two'>" . $tytuly[$n] . "</td>";
                    echo "<td class='one'>";
                    echo "<div class='dropdownn'>";
                    echo "<button class='dropbtn2n'  name='" . $scategory[$n][$i] . "' onclick='buton_menu(this)' id='" . $tytuly[$n] . "' >Choose</button>";
                    echo "<div  class='dropdown-contentn' id='drop_" . $tytuly[$n] . "'>";
                     search_access($tytuly[$n], $scategory);
                    for ($i = 0; $i < count($scategory[$n]); ++$i) {
                        if ($scategory[$n][$i] != null) {
                            echo "<a id='" . $scategory[$n][$i] . "' style='display:block;cursor: pointer;' name='" . $tytuly[$n] . "' value=$n onclick='showUser_new(this)'>" . $scategory[$n][$i] . "</a>";
                        }
                    }
                    echo "</div></td>";
                    $dane1 = str_replace("/", "", $col[$i]);
                    $dane1 = str_replace(":", "", $dane1);
                    $dane1 = substr($dane1, 0, 202);
                    if (file_exists("images/" . $dane1 . ".png")) {
                        echo "<td class='white'> <a href='images/" . $dane1 . ".png' class='rys' target='_blank'><img src='images/" . $dane1 . ".png' class='resize' alt=''></a></td>";
                    } else {
                        echo "<td class='white'><a href='images/" . $dane1 . ".png' class='rys' target='_blank'><img src='images/" . $dane1 . ".png' alt='' class='resize' onerror='imgError(this)'></a></td>";
                    }
                    echo "</tr>";
                } else {
                    if ($sc[$tytuly[$n]] != NULL) {
                        echo "<tr>";
                        echo "<td class='two'>" . $tytuly[$n] . "</td>";
                        if ($war[$n] != "0") {
                            echo "<td class='one'><a class='dropbtn2n' style='background-color: #CB9B2E;'> $war[$n]</a></td>";
                        } else {
                            echo "<td class='one'><a class='dropbtn2n' style='background-color: #CB462E;'> " . $sc[$tytuly[$n]] . "</a></td>";
                        }
                        echo "</tr>";
                    }
                }
            }
        }
        echo "</table><br>";
    }
    echo "<br>";
}
if (!function_exists('array_column')) {
    function array_column(array $input, $columnKey, $indexKey = null)
    {
        $array = array();
        foreach ($input as $value) {
            if (!isset($value[$columnKey])) {
                trigger_error("Key \"$columnKey\" does not exist in array");
                return false;
            }
            if (is_null($indexKey)) {
                $array[] = $value[$columnKey];
            } else {
                if (!isset($value[$indexKey])) {
                    trigger_error("Key \"$indexKey\" does not exist in array");
                    return false;
                }
                if (!is_scalar($value[$indexKey])) {
                    trigger_error("Key \"$indexKey\" does not contain scalar value");
                    return false;
                }
                $array[$value[$indexKey]] = $value[$columnKey];
            }
        }
        return $array;
    }
}
function notnull($arr)
{
    $i = 0;
    for ($n = 0; $n < count($arr); ++$n) {
        if (EMPTY($arr[$n])) {
        } else {
            $rez[$i] = $arr[$n];
            $i       = $i + 1;
        }
    }
    return $rez;
}
function remowchoos($war, $col)
{
    $n = 0;
    for ($i = 0; $i < count($col); ++$i) {
        if ($col[$i] <> "Choose") {
            $tabelka[0][$n] = $war[$i];
            $tabelka[1][$n] = $col[$i];
        }
        ++$n;
    }
    return $tabelka;
}
function czypuste($war, $col)
{
    $n = 0;
    for ($i = 0; $i < count($col); ++$i) {
        if (!EMPTY($col[$i])) {
            $tabelka[0][$n] = $war[$i];
            $tabelka[1][$n] = $col[$i];
        }
        ++$n;
    }
    return $tabelka;
}
function zmiany_wprowadzono_mail($user, $zam)
{
    if ($user != 'g.szkop') {
        $message = "Zostało dodane lub zmodyfikowane<br>zamówienie: <span style='color :#4D8EF0'>" . $zam . "</span><div> przez: <span style='color :#4D8EF0'>" . $user . "</span></div>";
        require 'PHPMailerAutoload.php';
        $mail = new PHPMailer;
        if ($_SERVER['HTTP_HOST'] == "wielon.c0.pl") {
            $mail->setFrom('admin@wielon.c0.pl');
        } else {
            $mail->setFrom('IRorders@wieltonir.c0.pl');
        }
        $mail->AddAddress('g.szkop@wielton.com.pl');
        $mail->Subject = "Zmiany w zamówieniu: " . $zam . ", przez: " . $user;
        $mail->IsHTML(true);
        $mail->CharSet = "UTF-8";
        $mail->Body    = $message;
        if (!$mail->send()) {
        } else {
        }
    }
}
function saveorder($q, $qu, $zam, $comm, $user)
{
    include("config_0.php");
    $zapisz = "zapisane";
    $tab    = "TABLE2";
    $link   = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $zlecenia = loadorder0();
    $wersja   = 1;
    $czy_prod = 0;
    foreach ($zlecenia as $r) {
        if ($r[0] == $zam) {
            $wersja              = $wersja + 1;
            $hist[$r[1] - 1]     = $r[7];
            $old_comm[$r[1] - 1] = $r[4];
            $wiersze0[$r[1] - 1] = $r[2];
            $dane0[$r[1] - 1]    = $r[3];
            if ($r[10] > 0 && $czy_prod != 1) {
                $czy_prod = 1;
                $od       = $r[10];
                $by       = $r[11];
            }
        }
    }
    $l_hist   = count($hist);
    $old_dane = bez_front($dane0[$l_hist - 1]);
    $new_dane = bez_front($qu);
    if ($old_dane == $new_dane && $old_comm[$l_hist - 1] == $comm) {
        $appro = $hist[$l_hist - 1];
    }
    if ($czy_prod == 1) {
        $sql = "INSERT INTO zapisane (`Order No`, `wersja`,`nazwy opcji`, `wybrane opcje`,`comment`, `uwagi`, `user`, `approved_by`,`produkcja`,`prod_by`)
            	VALUES ('" . $zam . "',$wersja, '" . $q . "', '" . $qu . "','" . $comm . "', '" . date("j-m-Y, G:i") . "', '" . $user . "','" . $appro . "' , '" . $od . "', '" . $by . "')";
    } else {
        $sql = "INSERT INTO zapisane (`Order No`, `wersja`,`nazwy opcji`, `wybrane opcje`,`comment`, `uwagi`, `user`, `approved_by`)
	VALUES ('" . $zam . "',$wersja, '" . $q . "', '" . $qu . "','" . $comm . "', '" . date("j-m-Y, G:i") . "', '" . $user . "', '" . $appro . "')";
    }
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error:Not saved, mayby order exists, or other problem ";
    }
    //zmiany_wprowadzono_mail($user, $zam);
}
function bez_front($wiersze0)
{
    $wiersze = explode('?', $wiersze0);
    for ($r = 0; $r < 6; $r++) {
        $wiersze[$r] = "";
    }
    $wiersze2 = join('?', $wiersze);
    return $wiersze2;
}
function approve_order_prod($q, $qu, $zam, $comm, $user)
{
    include("config_0.php");
    $zapisz = "zapisane";
    $tab    = "TABLE2";
    $link   = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mozna ustawic databasy : ' . mysql_error());
    }
    $zlecenia = loadorder0();
    $wersja   = 1;
    foreach ($zlecenia as $r) {
        if ($r[0] == $zam) {
            $wersja = $wersja + 1;
        }
    }
    $wersja_pop = $wersja - 1;
    $app        = "SELECT `approved_by` FROM zapisane WHERE `Order No` LIKE '" . $zam . "' AND `wersja` LIKE $wersja_pop";
    $results    = mysqli_query($link, $app);
    while ($row1 = mysqli_fetch_array($results)) {
        $row = $row1[0];
    }
    $sql = "UPDATE zapisane SET `produkcja`='" . date("j-m-Y, G:i") . "', `prod_by`='" . $user . "' WHERE `Order No`='" . $zam . "' AND `wersja`=$wersja_pop";
    if (mysqli_query($link, $sql)) {
        echo "Order approved";
    } else {
        echo "Error:Not saved, order exists, ";
    }
}
function approve_order($q, $qu, $zam, $comm, $user)
{
    include("config_0.php");
    $zapisz = "zapisane";
    $tab    = "TABLE2";
    $link   = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $zlecenia = loadorder0();
    $wersja   = 1;
    foreach ($zlecenia as $r) {
        if ($r[0] == $zam) {
            $wersja = $wersja + 1;
        }
    }
    $wersja_pop = $wersja - 1;
    $app        = "SELECT `approved_by` FROM zapisane WHERE `Order No` LIKE '" . $zam . "' AND `wersja` LIKE $wersja_pop";
    $results    = mysqli_query($link, $app);
    while ($row1 = mysqli_fetch_array($results)) {
        $row = $row1[0];
    }
    $sql = "UPDATE zapisane SET `approved_by`='" . $user . "?o?" . $row . "' WHERE `Order No`='" . $zam . "' AND `wersja`=$wersja_pop";
    if (mysqli_query($link, $sql)) {
        echo "Order approved";
    } else {
        echo "Error:Not saved, order exists, ";
    }
}
function Hide_order($q, $qu, $zam, $comm, $user, $ifh)
{
    include("config_0.php");
    $zapisz = "zapisane";
    $tab    = "TABLE2";
    $link   = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $zlecenia = loadorder0();
    $wersja   = 1;
    foreach ($zlecenia as $r) {
        if ($r[0] == $zam) {
            $wersja = $wersja + 1;
        }
    }
    $wersja_pop = $wersja - 1;
    $app        = "SELECT `hide` FROM zapisane WHERE `Order No` LIKE '" . $zam . "' AND `wersja` LIKE $wersja_pop";
    $results    = mysqli_query($link, $app);
    while ($row1 = mysqli_fetch_array($results)) {
        $row = $row1[0];
    }
    if ($ifh == 1) {
        $row = str_replace($user, "", $row);
        $sql = "UPDATE zapisane SET `hide`='" . $row . "' WHERE `Order No`='" . $zam . "' AND `wersja`=$wersja_pop";
    } else {
        $sql = "UPDATE zapisane SET `hide`='" . $user . "?o?" . $row . "' WHERE `Order No`='" . $zam . "' AND `wersja`=$wersja_pop";
    }
    if (mysqli_query($link, $sql)) {
        echo "Order hiden/unhiden";
    } else {
        echo "Error:Not saved, order exists, ";
    }
}
function del_wier($qd)
{
    include("config_0.php");
    $zapisz = "zapisane";
    $tab    = "TABLE2";
    $link   = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $sql = "DELETE FROM zapisane WHERE `Order No` LIKE '" . $qd . "'";
    if (mysqli_query($link, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
}
function loadorder0()
{
    include("config_0.php");
    $zapisz = "zapisane";
    $tab    = "TABLE2";
    $link   = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie można ustawić databasy : ' . mysql_error());
    }
    $query  = "SELECT * FROM zapisane";
    $result = mysqli_query($link, $query);
    $x      = 0;
    while ($row1 = mysqli_fetch_array($result)) {
        for ($y = 0; $y < count($row1); $y++) {
            if (isset($row1[$y])) {
                $col[$x][$y] = str_replace("'", "&#39 ", $row1[$y]);
            }
        }
        $x = $x + 1;
    }
    return $col;
}
function loadorder_tabele()
{
    include("config_0.php");
    $zapisz = "zapisane";
    $tab    = "TABLE2";
    $link   = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie można ustawić databasy : ' . mysql_error());
    }
    $query  = "SELECT * FROM TABLE2";
    $result = mysqli_query($link, $query);
    $x      = 0;
    while ($row1 = mysqli_fetch_array($result)) {
        for ($y = 0; $y < count($row1); $y++) {
            if (isset($row1[$y])) {
                $col[$x][$y] = $row1[$y];
            }
        }
        $x = $x + 1;
    }
    return $col;
}
function loadorderguest()
{
    include("config_0.php");
    $zapisz = "zapisane";
    $tab    = "TABLE2";
    $link   = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $query  = "SELECT * FROM zapisane ORDER BY ID DESC";
    $result = mysqli_query($link, $query);
    $x      = 0;
    while ($row1 = mysqli_fetch_array($result)) {
        for ($y = 0; $y < count($row1); $y++) {
            if (isset($row1[$y])) {
                $col1[$x][$y] = $row1[$y];
            }
        }
        $x = $x + 1;
    }
    $col = najnowsze($col1);
    echo "<table class='one' style='width:100%' margin-top: 500px>";
    echo "<col width=30%>";
    echo "<col width=5%>";
    echo "<col width=15%>";
    echo "<col width=50%>";
    echo "<tr>";
    echo "<td class='one'>Order No:</td>";
    echo "<td class='one'>Version</td>";
    echo "<td class='one'>Date</td>";
    echo "<td class='one'>Options</td>";
    echo "</tr>";
    for ($i = 0; $i < count($col); ++$i) {
        echo "<tr>";
        foreach (array(
            0,
            1,
            5
        ) as $n) {
            echo "<td class='dwa'>" . $col[$i][$n] . "</td>";
        }
        echo "<td class='dwa'>";
        echo "<button onclick='showFunction(this)' id='" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "'>show</button>";
        echo "<button onclick='showPLFunction(this)' id='" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "'>show(PL)</button>";
        echo "<button onclick='showdiffFunction(this)' id='" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "'>show changes</button>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
}
function loadorder_prod($user_check, $me)
{
    include("config_0.php");
    $zapisz = "zapisane";
    $tab    = "TABLE2";
    $link   = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $query  = "SELECT * FROM zapisane ORDER BY ID DESC";
    $result = mysqli_query($link, $query);
    $x      = 0;
    while ($row1 = mysqli_fetch_array($result)) {
        for ($y = 0; $y < count($row1); $y++) {
            if (isset($row1[$y])) {
                $col1[$x][$y] = $row1[$y];
            }
        }
        $x = $x + 1;
    }
    $col = najnowsze($col1);
    $col = nie_moje($col, $user_check, $me);
    include('session.php');
    echo "<table id ='loadtab' class='one' style='width:100%' margin-top: 500px>";
    echo "<col width=10%>";
    echo "<col width=3%>";
    echo "<col width=8%>";
    echo "<col width=8%>";
    echo "<col width=5%>";
    echo "<col width=32%>";
    echo "<tr>";
    echo "<td class='one'>Order No:</td>";
    echo "<td class='one'>Ver.</td>";
    echo "<td class='one'>Vehicle</td>";
    echo "<td class='one'>In production since</td>";
    echo "<td class='one'>Sent to production by</td>";
    echo "<td class='one'>Options</td>";
    echo "</tr>";
    for ($i = 0; $i < count($col); ++$i) {
        $cla = 'prod';
        echo "<tr>";
        foreach (array(
            0,
            1,
            3,
            10,
            11
        ) as $n) {
            if ($n == 3) {
                $naglow = explode('?', $col[$i][$n - 1]);
                $typ    = explode('?', $col[$i][$n]);
                if ($naglow[0] == "Category") {
                    echo "<td class=$cla>" . $typ[0] . "</td>";
                } else {
                    echo "<td class=$cla>" . $typ[7] . "</td>";
                }
            } else {
                echo "<td class=$cla>" . $col[$i][$n] . "</td>";
            }
        }
        echo "<td class=$cla>";
        if ($user_check == "admin") {
            echo "<button onclick='deleteFunction(this)' id='" . $col[$i][0] . "'>delete</button>";
        }
        echo "<button onclick='showdiffFunction(this)' id='" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' clientd='" . $col[$i][9] . "'>show</button>";
        echo "<button onclick='showPLFunction(this)' id='" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' clientd='" . $col[$i][9] . "'>show(PL)</button>";
        if (!empty($col[$i][11])) {
            echo "<button onclick='editFunction_prod(this)' id='" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' clientd='" . $col[$i][9] . "'>edit</button>";
        } else {
            echo "<button onclick='editFunction(this)' id='" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' clientd='" . $col[$i][9] . "'>edit</button>";
        }
        echo "<button onclick='showdiffFunction(this)' id='" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "'>show changes</button>";
        echo "<button onclick='sendorderPDF(this)' id='" . "send" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' ver='" . $col[$i][1] . "' user='" . $user_check . "' style='margin-left:100px;'>send email</button></td>";
        echo "</tr>";
    }
    echo "</table>";
}
  function stworz_plik_excel($list,$subject){

$file = fopen("saved/".$subject.".csv","w");
foreach ($list as $line){
  fputcsv($file,explode(";",$line),";");
  }

fclose($file);
  }
function loadorder($user_check, $nie_produkcyjne)
{
    include("config_0.php");
    $zapisz = "zapisane";
    $tab    = "TABLE2";
    $link   = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mozna ustawić databasy : ' . mysql_error());
    }
    $query  = "SELECT * FROM zapisane ORDER BY ID DESC";
    $result = mysqli_query($link, $query);
    $x      = 0;
    while ($row1 = mysqli_fetch_array($result)) {
        for ($y = 0; $y < count($row1); $y++) {
            if (isset($row1[$y])) {
                $col1[$x][$y] = $row1[$y];
            }
        }
        $x = $x + 1;
    }
    $col = najnowsze($col1);
    if ($me==34){ // do eksportowania wszystkich zleceń do csv
    csv_all($col);
    }
    $col = nie_hide($col, $user_check, 1);
   
    
         //print($nie_produkcyjne);
    $col = nie_prod($col, $user_check, $nie_produkcyjne);
    
    include('session.php');
    $r = wiersze($col, $user_check);
    return $col;
}

function csv_all($col){
                $naglowki=array("Order No.","version","PL order No.",'Client',
        'Delivery address to client',
        'VIN',
        'Production slot (week)',
        'Units',
        'Brand',
        "Category","Typ	axle producer","Calliper","options","upper structure type",
    "hinges for dropsides","pocket for hestal pillars","long palletbox","pockets for 80x80 pillars",
    "KTL","Nominal5 wheel","(real 5 wheel)","wheel size","wheels*","steering axle","axle type",
    "Chassis PDM drawing","QAD NR","steering axle crossbeam",
"ride height","min unloaded height","Mass of welded chassis","(W2) [kg]","dropside",
"upper structure according to drawing:","front wall","upper structure","roof type",
"double plywood on front wall","internal heights",
"upper structure planks","planks holder","rear","landing legs/shaft length/foot/position/ground dis.",
"accesory, boxes and wheel holders, 1","accesory,boxes and wheel holders, 2","toolbox","wheel holder",
"accesory, other, 1","accesory, other, 2",
"accesory, other, 3","accesory, side protection","accessory 1","accessory 2","accessory 3",
"accessory 4","accessory 5","accessory 6","accessory 7","accessory 8","Break pad wear sensors",
"rear buffer","full mudguards",
"mudguards","ferry rings","lashing rings for fixing goods inside semi.",
"1st axle lifted (steering from the cabin)","1st and 3rd axle lifted (steering from the cabin)",
"3rd axle lifted (steering from the cabin)","Hubodometer",
"Antispray on all mudguards","full LED","Lights","tire from Poland","rims from Poland",
"Electric socket","Frame","Rear bumper profile, light fixing profile","Wheel hub","Side protection color",
"Front pillar","Rear pillar",
"Front wall2","Rear door","Hestal","tarpaulin No.","tarpaulin color","tarpaulin with graphic",
"back doors with graphic","information abour standard configuration","Non standard description","Date of this version","In production since");
   // print_r($naglowki);

for ($i=0;$i<count($col);++$i) {
// dla wszystkich zleceń
      $war = explode('?', $col[$i][2]);
    $col0 = explode('?', str_replace(";",",",$col[$i][3]));
    $nag0[$i]["Non standard description"]=      str_replace("<br />","\n",str_replace(";",",",$col[$i][4]));
     $nag0[$i]["Date of this version"]=      $col[$i][5];
    $nag0[$i]["Order No."]=      $col[$i][0];
    $nag0[$i]["version"]=      $col[$i][1];
    $nag0[$i]["In production since"]=      $col[$i][10];
//$nag0[]=$col[$i][0];
for ($j=0;$j<count($war);++$j) {
// dane zlecenie
$nag0[$i][$war[$j]]= $col0[$j];
   }


    } // rozbicie na [order]=wartoć



 // print_r($nag0[2]["Category"]);
   echo "<table id ='wszystko' style='width:100%' margin-top: 100px>";
    /*echo "<tr>";
    for ($r=0;$r<count($nag0);++$r) {
    echo "<td class='one'>". $zlecenie[$r]."</td>";
     }

    echo "</tr>";*/
    for ($r=0;$r<count($naglowki);++$r) {
     $lista_all[$r]=$naglowki[$r];
   echo "<tr>";
    echo "<td class='two'>". $naglowki[$r]."</td>";
   // echo "<td class='one'>". $zlecenie."</td>";
    for ($t=0;$t<count($nag0);++$t) {
        echo "<td class='one'>". $nag0[$t][$naglowki[$r]]."</td>";
        $lista_all[$r].=";".$nag0[$t][$naglowki[$r]];
    }

     echo "</tr>";
     }
    echo "</table>";

    stworz_plik_excel($lista_all,"all");
     //print_r($lista_all);

 /*
     $list_csv[0]="Order No (v".$col[$j][1].");".$col[$j][0] ;
for ($j=0;$j<count($col[$j]);++$j){


$list_csv[$j+1]=  $war[$j].";".$col0[$j];

}
}
}

$comm2=str_replace("<br />","\n",$comm);
$list_csv[count($war)+1]="Non standard description;".$comm2;














$file = fopen("saved/all.csv","w");
foreach ($list as $line){
  fputcsv($file,explode(";",$line),";");
  }

fclose($file);   */

}
function loadorder_guest($user_check, $me)
{
    include("config_0.php");
    $zapisz = "zapisane";
    $tab    = "TABLE2";
    $link   = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mozna ustawić databasy : ' . mysql_error());
    }
    $query  = "SELECT * FROM zapisane ORDER BY ID DESC";
    $result = mysqli_query($link, $query);
    $x      = 0;
    while ($row1 = mysqli_fetch_array($result)) {
        for ($y = 0; $y < count($row1); $y++) {
            if (isset($row1[$y])) {
                $col1[$x][$y] = $row1[$y];
            }
        }
        $x = $x + 1;
    }
    $col = najnowsze($col1);
    $col = nie_hide($col, $user_check, $me);
    $r   = wiersze($col, $user_check);
    return $col;
}
function loadorder_one($user_check, $me)
{
    include("config_0.php");
    $zapisz = "zapisane";
    $tab    = "TABLE2";
    $link   = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $query  = "SELECT * FROM zapisane ORDER BY ID DESC";
    $result = mysqli_query($link, $query);
    $x      = 0;
    while ($row1 = mysqli_fetch_array($result)) {
        for ($y = 0; $y < count($row1); $y++) {
            if (isset($row1[$y])) {
                $col1[$x][$y] = $row1[$y];
            }
        }
        $x = $x + 1;
    }
    $col = najnowsze($col1);
    $col = brak_nr_zam($col, $user_check, $me);
    include('session.php');
    echo "<table id ='loadtab' class='one' style='width:100%' margin-top: 500px>";
    echo "<col width=10%>";
    echo "<col width=3%>";
    echo "<col width=8%>";
    echo "<col width=8%>";
    echo "<col width=8%>";
    echo "<col width=5%>";
    echo "<col width=10%>";
    echo "<col width=40%>";
    echo "<tr>";
    echo "<td class='one'>A</td>";
    echo "<td class='one'>B</td>";
    echo "<td class='one'>C</td>";
    echo "<td class='one'>sprawdz</td>";
    echo "<td class='one'>NR zam</td>";
    echo "<td class='one'>Made by</td>";
    echo "<td class='one'>Approved by</td>";
    echo "<td class='one'>Options</td>";
    echo "</tr>";
    $count = count($col) - 1;
    for ($i = 0; $i < count($col); ++$i) {
        $io = $count - $i;
        echo "<tr id='hd_" . $col[$i][0] . "'>";
        foreach (array(
            0,
            1
        ) as $n) {
            if ($n == 3) {
                $naglow = explode('?', $col[$i][$n - 1]);
                $typ    = explode('?', $col[$i][$n]);
                if ($naglow[0] == "Category") {
                    echo "<td class='dwa' id='" . $i . "a'>" . $typ[0] . "</td>";
                } else {
                    echo "<td class='dwa' >" . $typ[7] . "</td>";
                }
            } else {
                if ($n == 0) {
                }
                echo "<td class='dwa' >" . $col[$i][$n] . "</td>";
            }
        }
        $apr    = str_replace("?o?", ", ", $col[$i][7]);
        $hid    = str_replace("?o?", ", ", $col[$i][12]);
        $szukaj = przerob($col[$i][0]);
        echo "<td class='dwa' id='" . $i . "0' >" . $szukaj . "</td>";
        echo "<td class='dwa'><input type='text' name='Order No.' id='$i.$i' size='50'></td>";
        echo "<td class='dwa'><input type='text' name='Order No.' id='$i' size='100'></td>";
        echo "<td class='dwa'><button onclick='save_order_one(this)' id='" . $col[$i][0] . "' ver='" . $col[$i][1] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' clientd='" . $col[$i][9] . "' numer='$i'>save</button></td>";
        echo "<td class='dwa'>$i</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<input type='text' name='ile' id='ktore' size='100' value='0'>";
    return $col;
}
function przerob($col)
{
    $n   = 0;
    $o   = 1;
    $wyn = "";
    $rm  = "";
    for ($y = 0; $y < strlen($col); $y++) {
        if (is_numeric($col[$y])) {
            if ($o == 1) {
                $wyn = $wyn . $col[$y];
                $n++;
            }
        } else {
            if ($col[$y] != "_") {
                $o  = 0;
                $rm = $rm . $col[$y];
            }
        }
    }
    $szukaj = $wyn . "*" . $rm . "*17";
    return $szukaj;
}
function loadorder_notab($user_check, $me)
{
    include("config_0.php");
    $zapisz = "zapisane";
    $tab    = "TABLE2";
    $link   = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $query  = "SELECT * FROM zapisane ORDER BY ID DESC";
    $result = mysqli_query($link, $query);
    $x      = 0;
    while ($row1 = mysqli_fetch_array($result)) {
        for ($y = 0; $y < count($row1); $y++) {
            if (isset($row1[$y])) {
                $col1[$x][$y] = $row1[$y];
            }
        }
        $x = $x + 1;
    }
    $col = najnowsze($col1);
    $col = nie_moje($col, $user_check, $me);
    return $col;
}
function poszukiwane($col, $user_check, $me, $szukane)
{
    $n       = 0;
    $szukane = str_replace("/", "\/", $szukane);
    foreach ($col as $r) {
        $pl_nr = explode('?', $r[3]);
        if (preg_match("/(" . $szukane . ")/i", $r[0]) || preg_match("/(" . $szukane . ")/i", $pl_nr[0]) || preg_match("/(" . $szukane . ")/i", $pl_nr[7]) || preg_match("/(" . $szukane . ")/i", $pl_nr[1])) {
            $colu[$n] = $r;
            $n++;
        }
    }
    return $colu;
}
function loadorder_live($user_check, $me, $szukane)
{
    include("config_0.php");
    $zapisz = "zapisane";
    $tab    = "TABLE2";
    $link   = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $query  = "SELECT * FROM zapisane ORDER BY ID DESC";
    $result = mysqli_query($link, $query);
    $x      = 0;
    while ($row1 = mysqli_fetch_array($result)) {
        for ($y = 0; $y < count($row1); $y++) {
            if (isset($row1[$y])) {
                $col1[$x][$y] = $row1[$y];
            }
        }
        $x = $x + 1;
    }
    $col = najnowsze($col1);
    $col = poszukiwane($col, $user_check, $me, $szukane);
    include('session.php');
    $r = wiersze($col, $user_check);
    return $col;
}
function najnowsze($col1)
{
    foreach ($col1 as $r) {
        if (isset($zl[$r[0]])) {
            if ($r[1] > $zl[$r[0]]) {
                $zl[$r[0]]  = $r[1];
                $col[$r[0]] = $r;
            }
        } else {
            $zl[$r[0]]  = $r[1];
            $col[$r[0]] = $r;
        }
    }
    $n = 0;
    foreach ($col as $c) {
        $colu[$n] = $c;
        ++$n;
    }
    return $colu;
}
function nie_moje($col1, $user_check, $me)
{
    $n = 0;
    if ($me == 4) {
        return $col1;
    }
    foreach ($col1 as $r) {
        if ($me == 1) {
            if (preg_match("/" . $user_check . "/", $r[7])) {
                $colu[$n] = $r;
                ++$n;
            }
        } else {
            if (!preg_match("/" . $user_check . "/", $r[7]) and $me == 0 and strtotime($r[10]) <= 0) {
                $colu[$n] = $r;
                ++$n;
            }
        }
        if ($me == 3 and $r[10] > 0) {
            $colu[$n] = $r;
            ++$n;
        }
    }
    return $colu;
}
function nie_prod($col1, $user_check, $me)
{
    $n = 0;
    if ($me == 0) {
        return $col1;
    }
    foreach ($col1 as $r) {
        if ($r[10] <= 0) {
        print_r($r[10]);
            $colu[$n] = $r;
            ++$n;
        }
    }
    return $colu;
}
function brak_nr_zam($col1, $user_check, $me)
{
    $n = 0;
    foreach ($col1 as $r) {
        $war      = explode('?', $r[2]);
        $zlec_zap = explode('?', $r[3]);
        if ($war[0] == "PL order No." && empty($zlec_zap[0])) {
            $colu[$n] = $r;
            ++$n;
        }
    }
    return $colu;
}
function nie_hide($col1, $user_check, $me)
{
    $n = 0;
    foreach ($col1 as $r) {
        if ($me == 1) {
            if (!preg_match("/" . $user_check . "/", $r[12])) {
                $colu[$n] = $r;
                ++$n;
            }
        } else {
            if (preg_match("/" . $user_check . "/", $r[12])) {
                $colu[$n] = $r;
                ++$n;
            }
        }
    }
    return $colu;
}


function yes_image($dane1,$po){
 if($dane1=="YES"){
$dane2= $po ;
}else{
$dane2=$dane1;
}
return $dane2;
}
function showtable2($war2, $col2, $zam, $comm)
{
    $war = explode('?', $war2);
    $col = explode('?', $col2);
    echo "<table class='one' style='width:100%' margin-top: 500px>";
    echo "<td class='two'>Order No.</td>";
    echo "<td class='one'>" . $zam . "</td>";
    for ($i = 0; $i < count($war); ++$i) {
        echo "<tr>";
        echo "<td class='two'>" . $war[$i] . "</td>";
        echo "<td class='one'>" . $col[$i] . "</td>";
        $dane1 = str_replace("/", "", $col[$i]);
        $dane1 = str_replace(":", "", $dane1);
        $dane1 = substr($dane1, 0, 202);
        $dane1=yes_image($dane1,$po[$i]);

        if (file_exists("images/" . $dane1 . ".png")) {
            echo "<td class='white'> <a href='images/" . $dane1 . ".png' class='rys' target='_blank'><img src='images/" . $dane1 . ".png' class='resize' alt=''></a></td>";
        } else {
            echo "<td class='white'><a href='images/" . $dane1 . ".png' class='rys' target='_blank'><img src='images/" . $dane1 . ".png' alt='' class='resize' onerror='imgError(this)'></a></td>";
        }
        echo "</tr>";
    }
    echo "<td class='two'>Non standard description</td>";
    echo "<td class='one'>" . $comm . "</td>";
    echo "</table><br>";
}
function client_gen($clientd)
{
    $client_data = array(
        'PL order No.',
        'Client',
        'Delivery address to client',
        'VIN',
        'Production slot (week)',
        'Units',
        'Brand'
    );
    $c_d         = $col1 = join("?p?", $client_data);
    $marki       = array(
        'Viberti',
        'Merker',
        'Cardi'
    );
    echo "<form> ";
    echo "<table class='one' style='width:100%' margin-top: 500px>";
    echo "<col width=20%>";
    echo "<col width=80%>";
    $n = 0;
    foreach ($client_data as $c) {
        echo "<tr>";
        echo "<td class='four'>" . $c . "</td>";
        if ($clientd[$n] == "Choose") {
            echo "<td class='one'></td>";
        } else {
            echo "<td class='one'>" . $clientd[$n] . "</td>";
        }
        $n++;
        echo "</tr>";
    }
    echo "</table><br>";
    echo "</form>";
    echo "<div class='content'>";
    echo "<div id='section'>";
    echo "<div id='txtHint3'><b></b></div>";
    echo "<div id='txtHint'><b></b></div>";
    echo "</div>";
    echo "</div>";
    echo "<div  id='txtHint2'><b></b></div>";
    echo "</div>";
}
function client_gen_edit($clientd)
{
    $client_data = array(
        'PL order No.',
        'Client',
        'Delivery address to client',
        'VIN',
        'Production slot (week)',
        'Units',
        'Brand'
    );
    $c_d         = $col1 = join("?p?", $client_data);
    $marki       = array(
        'Viberti',
        'Merker',
        'Cardi'
    );
    echo "<form> ";
    echo "<table class='one' style='width:100%' margin-top: 500px>";
    $n = 0;
    foreach ($client_data as $c) {
        echo "<tr>";
        if ($c == 'Brand') {
            echo "<td class='four'>" . $c . "</td>";
            echo "<td class='one'>";
            echo "<div class='dropdown'>";
            if (EMPTY($clientd[$n])) {
                echo "<button class='dropbtn' id='" . $c . "'>Choose</button>";
            } else {
                echo "<button class='dropbtn' id='" . $c . "'>" . $clientd[$n] . "</button>";
            }
            echo "<div  class='dropdown-content'>";
            for ($p = 0; $p < count($marki); ++$p) {
                echo "<a id='" . $marki[$p] . "' name='" . $c . "'  onclick='chooserclient(this)'>" . $marki[$p] . "</a>";
            }
            echo "</div></td>";
        } else {
            echo "<td class='four'>" . $c . "</td>";
            echo "<td class='one'><input type='text' name='" . $c . "' id='" . $c . "' size='100' value='" . $clientd[$n] . "'>";
            echo "<span id='err" . $client_data[$n] . "'></span></td>";
            $n++;
        }
        echo "</tr>";
    }
    echo "</table><br>";
    echo "</form>";
    echo "<div class='content'>";
    echo "<div id='section'>";
    echo "<div id='txtHint3'><b></b></div>";
    echo "<div id='txtHint'><b></b></div>";
    echo "</div>";
    echo "</div>";
    echo "<div  id='txtHint2'><b></b></div>";
    echo "</div>";
}
function przycisk($opcje, $wiersz, $tytul)
{
    echo "<button class='dropbtn' onclick='buton_menu(this)' id='" . $wiersz . "'>" . $tytul . "</button>";
    echo "<div  class='dropdown-content' id='drop_" . $wiersz . "'>";
    foreach ($opcje as $access) {
        echo "<a id='" . $access . "' style='cursor: pointer;' name='" . $wiersz . "'  onclick='opony(this); chooser(this)'>" . $access . "</a>";
    }
    echo "</div> ";
}
function przycisk_n($opcje, $wiersz, $tytul)
{
    echo "<button class='dropbtn' onclick='buton_menu(this)' id='" . $wiersz . "'>" . $tytul . "</button>";
    echo "<div  class='dropdown-contentn' id='drop_" . $wiersz . "'>";
    foreach ($opcje as $access) {
        echo "<a id='" . $access . "' style='cursor: pointer;' name='" . $wiersz . "'  onclick='opony(this); chooser_tarp_new(this)'>" . $access . "</a>";
    }
    echo "</div> ";
}
function search_access($po, $opcja)
{
    echo "<a style='display:block;cursor: pointer;'><input class='poszukiwanie' type='text'  name='search_" . $po . "' id='search_" . $po . "' size='50' onkeyup='showResult_access(this)' placeholder='Search..'></a>";
}
function rozbij_opony($opcje, $start)
{
    for ($w = $start; $w < count($opcje); $w++) {
        $podz[$w] = explode(", ", $opcje[$w]);
        for ($n = 0; $n < count($podz[$w]); $n++) {
            $podz2[$w][$n] = explode("x", $podz[$w][$n]);
            $ile[$w]       = $podz2[$w][0][0];
            $opony[$w]     = $podz2[$w][0][1];
            $ile_fel[$w]   = $podz2[$w][1][0];
            $felgi[$w]     = $podz2[$w][1][1];
        }
    }
    $minim    = min($ile);
    $opony    = array_unique($opony);
    $felgi    = array_unique($felgi);
    $wynik[0] = $ile;
    $wynik[1] = $opony;
    $wynik[2] = $ile_fel;
    $wynik[3] = $felgi;
    $wynik[4] = $minim;
    return $wynik;
}
function rozbij_opony_zapisane($opcje, $start)
{
    for ($w = $start; $w < 1; $w++) {
        $podz[$w] = explode(", ", $opcje);
        for ($n = 0; $n < count($podz[$w]); $n++) {
            $podz2[$w][$n] = explode("x", $podz[$w][$n]);
            $ile[$w]       = $podz2[$w][0][0];
            $opony[$w]     = $podz2[$w][0][1];
            $ile_fel[$w]   = $podz2[$w][1][0];
            $felgi[$w]     = $podz2[$w][1][1];
        }
    }
    $minim    = min($ile);
    $opony    = array_unique($opony);
    $felgi    = array_unique($felgi);
    $wynik[0] = $ile[0];
    $wynik[1] = $opony[0];
    $wynik[2] = $ile_fel[0];
    $wynik[3] = $felgi[0];
    $wynik[4] = $minim;
    return $wynik;
}
function remove_line($col){
$poczatek='<span style="text-decoration: line-through;">';
$koniec="</span>";
//print_r(htmlspecialchars($poczatek));
//for ($i = 0; $i < count($col); ++$i) {
// print_r($col[$i]) ;
$c1=explode("</span>",$col);

if (count($c1)>1){
      $col=$c1[0];
      //print_r($col[$i]);
      }
    $col=str_replace($poczatek,'',$col);
    $col=str_replace($koniec,'',$col);


      //$colo[$i]= explode('</',$c1[0]);
     // echo "<br>";
     // print_r($col[$i]);
//}

return $col;
}

function remove_line_dopisane($col){
$poczatek='<span style="text-decoration: line-through;">';
$koniec="</span>";
//print_r($col);

for ($i = 0; $i < count($col); ++$i) {
 //print_r(count($col)) ;
//print_r(strip_tags($col[$i]));
//$c1=explode(strip_tags($koniec),$col[$i]);
//preg_match_all( "|<span>(.*)</span>|U", $col[i], $parts );
// print_r($c1);
//if (count($c1)>1){
  //    $col[$i]=$c1[0];

    //  }
     //print_r( $col[$i]);
    $col[$i]=str_replace($poczatek,'?fet?',$col[$i]);
    $col[$i]=str_replace($koniec,'?fet2?',$col[$i]);
   $c1=explode("?fet2?",$col[$i]);
   if (count($c1)>1){
      $col[$i]=$c1[0];

      }
      $col[$i]=str_replace('?fet?','',$col[$i]);
// print_r($col[$i]);
      //$colo[$i]= explode('</',$c1[0]);
     // echo "<br>";
     // print_r($col[$i]);
}

return $col;
}
function showtable_new($war2, $col2, $zam, $comm)
{
    echo "<h1 id='q' class='ukryte'>0?0?0?0?0?0?0?0?0?0?0?0?0?0?0?0</h1>";
    $tg0      = tlumacz_grup();
    $tg       = $tg0[0];
    $cena     = $tg0[1];
    $c        = 0;
    $tabelka2 = get_table2();
    $marki    = array(
        'Viberti',
        'Merker',
        'Cardi'
    );
    $war      = explode('?', $war2);
    $col3      = explode('?', $col2);

    $col=remove_line_dopisane($col3);
    for ($w = 0; $w < count($war); $w++) {
        $tab[$war[$w]] = $col3[$w];
    }
    $po    = poka_edit($col, $war);
     //print_r($col3);
     $po3    = poka_edit($col3, $war);
    $opcja = getopcje();
    echo "<table class='one' style='width:100%' margin-top: 500px>";
    if ($war[0] == "PL order No.") {
        for ($r = 0; $r < 7; $r++) {
            echo "<tr><td class='four'>" . $war[$r] . "</td>";
            echo "<td class='one'>" . $col3[$r] . "</td><td></td><td class='white' id='pic" . $war[$r] . "'>";

            $dane1=$col3[$r];
             if (file_exists("images/" . $dane1 . ".png")) {
            echo " <a href='images/" . $dane1 . ".png' class='rys' target='_blank'><img src='images/" . $dane1 . ".png' class='resize' alt=''></a>";
        } else {
            echo "<a href='images/" . $dane1 . ".png' class='rys' target='_blank'><img src='images/" . $dane1 . ".png' alt='' class='resize' onerror='imgError(this)'></a>";
        }

            echo "</td><td class='one'>";
            if ($war[$r] == "Brand") {
                echo "<div class='dropdown'>";
                if (($col[$r]) != NULL) {
                    echo "<button class='dropbtn2' onclick='buton_menu(this)' id='" . $war[$r] . "'>" . $col3[$r] . "</button>";
                } else {
                    echo "<button class='dropbtn2' onclick='buton_menu(this)' id='" . $war[$r] . "'>Chooses</button>";
                }
                echo "<div  class='dropdown-content' id='drop_" . $war[$r] . "'>";
                for ($p = 0; $p < count($marki); ++$p) {
                    echo "<a id='" . $marki[$p] . "' style='cursor: pointer;' name='" . $war[$r] . "'  onclick='chooser2(this)' >" . $marki[$p] . "</a>";
                }
                echo "</div></td>";
            } else {
                echo "<input type='text' name='" . $war[$r] . "' id='" . $war[$r] . "' size='50' value='" . htmlspecialchars($col3[$r], ENT_QUOTES) . "'>";
            }
            echo "</td></tr>";
        }
    } else {
        include('client.php');
    }
    echo "<tr>";
    echo "<td class='two'>Order No.</td>";
    echo "<td class='one'>" . $zam . "</td>";
    echo "<td class='white'>" . $b . "</td>";
    echo "<td class='white'></td>";
    echo "<td class='one'>" . $zam . "</td>";
    echo "</tr>";
     //print_r($po['size']);
    for ($i = 0; $i < $po['size']; ++$i) {
        if ($po[$i] == "wheels*") {
            $szczeg          = rozbij_opony($opcja[$po[$po[$i]]], 1);
            $szczeg_zapisany = rozbij_opony_zapisane($tab[$po[$i]], 0);
            echo "<tr>";
            echo "<td class='two'>" . $po[$i] . "</td>";
            echo "<td class='one'>" . $tab[$po[$i]] . "</td><td class='cena' id='c_" . $po[$i] . "'></td>";
            echo "<td class='white' id='pic" . $po[$i] . "'></td>";
            echo "<td class='one' id='opo_" . $po[$i] . "'><input type='number' id='ile_opon' onchange='ilosc(this)' name='quantity' min='0' max='9' value='" . $szczeg_zapisany[0] . "' style='width:40px;'> ";
            przycisk($szczeg[1], "opony", $szczeg_zapisany[1]);
            echo ", <input type='number' id='ile_felg' onchange='ilosc(this)' name='quantity' min='0' max='9' value='" . $szczeg_zapisany[2] . "' style='width:40px;'> ";
            przycisk($szczeg[3], "felgi", $szczeg_zapisany[3]);
            echo "<h1 id='" . $po[$i] . "' class='ukryte'>" . $tab[$po[$i]] . "</h1>";
            echo "</td>";
            echo "</tr>";
        } else {
            if (!($po[$i] == "ride height" || $po[$i] == "min unloaded height" || $po[$i] == "Mass of welded chassis (W2) [kg]")) {
                if (EMPTY($tab[$po[$i]]) and !isset($opcja[$po[$po[$i]]])) {
                    nie_pusto($po, $i, $tabelka2);
                } else {
                    echo "<tr>";
                    echo "<td class='two'>" . $po[$i] . "</td>";
                    if (isset($tab[$po[$i]])) {
                        echo "<td class='one'>" . $tab[$po[$i]] . "</td>";
                        $b = tlumacz4($tab[$po[$i]], $cena, $po[$i]);
                        echo "<td class='cena' id='c_" . $po[$i] . "'>" . $b . "</td>";
                        $price = $price + $b;
                        $dane1 = str_replace("/", "", $tab[$po[$i]]);
                        $dane1 = str_replace(":", "", $dane1);
                        $dane1 = substr($dane1, 0, 202);


                        $dane1=yes_image($dane1,$po[$i]);

                        if (file_exists("images/" . $dane1 . ".png")) {
                            echo "<td class='white' id='pic" . $po[$i] . "'> <a href='images/" . $dane1 . ".png' class='rys' target='_blank'><img src='images/" . $dane1 . ".png' class='resize' alt=''></a></td>";
                        } else {
                            echo "<td class='white' id='pic" . $po[$i] . "'><a href='images/" . $dane1 . ".png' class='rys' target='_blank'><img src='images/" . $dane1 . ".png' alt='' class='resize' onerror='imgError(this)'></a></td>";
                        }
                    } else {
                        echo "<td class='one'></td><td class='cena' id='c_" . $po[$i] . "'></td>";
                        echo "<td class='white' id='pic" . $po[$i] . "'></td>";
                    }
                    if (isset($opcja[$po[$po[$i]]])) {
                        echo "<td class='one'>";
                        echo "<div class='dropdown'>";
                        if (isset($tab[$po[$i]])) {
                            if ($po[$i] == 'tarpaulin No.') {
                                $plandeka = 0;
                                echo "<button class='dropbtn2' onclick='buton_menu_tarp(this)' id='" . $po[$i] . "' color='red' plandeka='" . $plandeka . "'>" . $tab[$po[$i]] . "</button>";
                            } else {
                                echo "<button class='dropbtn2' onclick='buton_menu(this)' id='" . $po[$i] . "' color='red'>" . $tab[$po[$i]] . "</button>";
                            }
                        } else {
                            echo "<button class='dropbtn' onclick='buton_menu(this)' id='" . $po[$i] . "'>Choose</button>";
                        }
                        echo "<div  class='dropdown-content' id='drop_" . $po[$i] . "'>";
                        search_access($po[$i], $opcja[$po[$po[$i]]]);
                        for ($p = 1; $p < count($opcja[$po[$po[$i]]]); ++$p) {
                            echo "<a style='display:block;cursor: pointer;' id='" . $opcja[$po[$po[$i]]][$p] . "' name='" . $po[$i] . "' value='" . $i . "' onclick='chooser2(this)'>" . $opcja[$po[$po[$i]]][$p] . "</a>";
                        }
                        echo "</div>";
                    } else {
                        jesli_nie_opcja($po, $i, $tabelka2, $tab[$po[$i]],$po3);
                    }
                    echo "<td><button type='button' class='btn-warning btn-sm' align='right' onclick='niestandard(this)' value='".$po[$i]."'>NS</button></td></td></tr>";
                }
            }
        }
    }

    echo "<td class='two'>Non standard description</td>";
    echo "<td class='one'>$comm</td>";
    echo "<td class='white'></td><td></td>";
    $comm = str_replace('<br />', '&#13;', $comm);
    echo "<td class='one'><textarea name='comment' id='comment' style='width:90%;height:150px;'>$comm</textarea></td>";
    echo "</table><br>";
   // echo "<div><p align='right' style='position:fixed; right:50px; bottom:10px;'>total price:</p>";
    //echo "<p id='total_cena' align='right' style='position:fixed; right:10px; bottom:10px;'>" . $price . "</p></div>";
    $tab         = czypuste($po, $po);
    $col1        = join("?", $tab[0]);
    $col2        = join("?", $tab[1]);
    $client_data = array(
        'PL order No.',
        'Client',
        'Delivery address to client',
        'VIN',
        'Production slot (week)',
        'Units',
        'Brand'
    );
    $c_d         = join("?p?", $client_data);
    include('session.php');
    if ($user_check != "guest") {
        echo "Order No:<br>";
        echo "<input type='text' name='Order No.' id='Order No.' value='" . $zam . "' size='100'><br>";
        echo "<button id='save_button' col1='" . $col1 . "' col2='" . $col1 . "' onclick='ssave(this)' user='" . $user_check . "' order='" . $c_d . "'>save</button>";
    } else {
        echo "you must be logged to save";
    }

}
function showtable($war2, $col2, $zam, $comm)
{
    $tg0   = tlumacz_grup();
    $tg    = $tg0[0];
    $cena  = $tg0[1];
    $c     = 0;
    $marki = array(
        'Viberti',
        'Merker',
        'Cardi'
    );
    $war   = explode('?', $war2);
    $col   = explode('?', $col2);
    for ($w = 0; $w < count($war); $w++) {
        $tab[$war[$w]] = $col[$w];
    }
    $po    = poka_edit($col, $war);
    $opcja = getopcje();
    echo "<table class='one' style='width:100%' margin-top: 500px>";
    if ($war[0] == "PL order No.") {
        for ($r = 0; $r < 7; $r++) {
            echo "<tr><td class='four'>" . $war[$r] . "</td>";
            echo "<td class='one'>" . $col[$r] . "</td><td></td><td></td><td class='one'>";
            if ($war[$r] == "Brand") {
                echo "<div class='dropdown'>";
                if (($col[$r]) != NULL) {
                    echo "<button class='dropbtn2' onclick='buton_menu(this)' id='" . $war[$r] . "'>" . $col[$r] . "</button>";
                } else {
                    echo "<button class='dropbtn2' onclick='buton_menu(this)' id='" . $war[$r] . "'>Choose</button>";
                }
                echo "<div  class='dropdown-content' id='drop_" . $war[$r] . "'>";
                for ($p = 0; $p < count($marki); ++$p) {
                    echo "<a id='" . $marki[$p] . "' style='cursor: pointer;' name='" . $war[$r] . "'  onclick='chooser2(this)' >" . $marki[$p] . "</a>";
                }
                echo "</div></td>";
            } else {
                echo "<input type='text' name='" . $war[$r] . "' id='" . $war[$r] . "' size='50' value='" . htmlspecialchars($col[$r], ENT_QUOTES) . "'>";
            }
            echo "</td></tr>";
        }
    } else {
        include('client.php');
    }
    echo "<tr>";
    echo "<td class='two'>Order No.</td>";
    echo "<td class='one'>" . $zam . "</td>";
    echo "<td class='white'>" . $b . "</td>";
    echo "<td class='white'></td>";
    echo "<td class='one'>" . $zam . "</td>";
    echo "</tr>";
    for ($i = 0; $i < $po['size']; ++$i) {
        if ($po[$i] == "wheels*") {
            $szczeg          = rozbij_opony($opcja[$po[$po[$i]]], 1);
            $szczeg_zapisany = rozbij_opony_zapisane($tab[$po[$i]], 0);
            echo "<tr>";
            echo "<td class='two'>" . $po[$i] . "</td>";
            echo "<td class='one'>" . $tab[$po[$i]] . "</td><td class='cena' id='c_" . $po[$i] . "'></td>";
            echo "<td class='white' id='pic" . $po[$i] . "'></td>";
            echo "<td class='one' id='opo_" . $po[$i] . "'><input type='number' id='ile_opon' onchange='ilosc(this)' name='quantity' min='0' max='9' value='" . $szczeg_zapisany[0] . "' style='width:40px;'> ";
            przycisk($szczeg[1], "opony", $szczeg_zapisany[1]);
            echo ", <input type='number' id='ile_felg' onchange='ilosc(this)' name='quantity' min='0' max='9' value='" . $szczeg_zapisany[2] . "' style='width:40px;'> ";
            przycisk($szczeg[3], "felgi", $szczeg_zapisany[3]);
            echo "<h1 id='" . $po[$i] . "' class='ukryte'>" . $tab[$po[$i]] . "</h1>";
            echo "</td>";
            echo "</tr>";
        } else {
            if (!($po[$i] == "ride height" || $po[$i] == "min unloaded height" || $po[$i] == "Mass of welded chassis (W2) [kg]")) {
                if (EMPTY($tab[$po[$i]]) and !isset($opcja[$po[$po[$i]]])) {
                    if (!EMPTY($po[$po[$i]])) {
                        echo "<tr>";
                        echo "<td class='two'>" . $po[$i] . "</td>";
                        echo "<td class='one'></td><td class='cena' id='c_" . $po[$i] . "'></td>";
                        echo "<td class='white' id='pic" . $po[$i] . "'></td>";
                        echo "<td class='one' id='" . $po[$i] . "'>" . $po[$po[$i]] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr>";
                    echo "<td class='two'>" . $po[$i] . "</td>";
                    if (isset($tab[$po[$i]])) {
                        echo "<td class='one'>" . $tab[$po[$i]] . "</td>";
                        $b = tlumacz4($tab[$po[$i]], $cena, $po[$i]);
                        echo "<td class='cena' id='c_" . $po[$i] . "'>" . $b . "</td>";
                        $price = $price + $b;
                        $dane1 = str_replace("/", "", $tab[$po[$i]]);
                        $dane1 = str_replace(":", "", $dane1);
                        $dane1 = substr($dane1, 0, 202);
                        if (file_exists("images/" . $dane1 . ".png")) {
                            echo "<td class='white' id='pic" . $po[$i] . "'> <a href='images/" . $dane1 . ".png' class='rys' target='_blank'><img src='images/" . $dane1 . ".png' class='resize' alt=''></a></td>";
                        } else {
                            echo "<td class='white' id='pic" . $po[$i] . "'><a href='images/" . $dane1 . ".png' class='rys' target='_blank'><img src='images/" . $dane1 . ".png' alt='' class='resize' onerror='imgError(this)'></a></td>";
                        }
                    } else {
                        echo "<td class='one'></td><td class='cena' id='c_" . $po[$i] . "'></td>";
                        echo "<td class='white' id='pic" . $po[$i] . "'></td>";
                    }
                    if (isset($opcja[$po[$po[$i]]])) {
                        echo "<td class='one'>";
                        echo "<div class='dropdown'>";
                        if (isset($tab[$po[$i]])) {
                            if ($po[$i] == 'tarpaulin No.') {
                                $plandeka = 0;
                                echo "<button class='dropbtn2' onclick='buton_menu_tarp(this)' id='" . $po[$i] . "' color='red' plandeka='" . $plandeka . "'>" . $tab[$po[$i]] . "</button>";
                            } else {
                                echo "<button class='dropbtn2' onclick='buton_menu(this)' id='" . $po[$i] . "' color='red'>" . $tab[$po[$i]] . "</button>";
                            }
                        } else {
                            echo "<button class='dropbtn' onclick='buton_menu(this)' id='" . $po[$i] . "'>Choose</button>";
                        }
                        echo "<div  class='dropdown-content' id='drop_" . $po[$i] . "'>";
                        for ($p = 1; $p < count($opcja[$po[$po[$i]]]); ++$p) {
                            echo "<a id='" . $opcja[$po[$po[$i]]][$p] . "' style='cursor: pointer;' name='" . $po[$i] . "'  onclick='chooser2(this)'>" . $opcja[$po[$po[$i]]][$p] . "</a>";
                        }
                        echo "</div></td>";
                    } else {
                        echo "<td class='one' id='" . $po[$i] . "'>" . $po[$po[$i]] . "</td>";
                    }
                    echo "</tr>";
                }
            }
        }
    }
    echo "<td class='two'>Non standard description</td>";
    echo "<td class='one'>$comm</td>";
    echo "<td class='white'></td><td></td>";
    $comm = str_replace('<br />', '&#13;', $comm);
    echo "<td class='one'><textarea name='comment' id='comment' style='width:90%;height:150px;'>$comm</textarea></td>";
    echo "</table><br>";
    //echo "<div><p align='right' style='position:fixed; right:50px; bottom:10px;'>total price:</p>";
    //echo "<p id='total_cena' align='right' style='position:fixed; right:10px; bottom:10px;'>" . $price . "</p></div>";
    $tab         = czypuste($po, $po);
    $col1        = join("?", $tab[0]);
    $col2        = join("?", $tab[1]);
    $client_data = array(
        'PL order No.',
        'Client',
        'Delivery address to client',
        'VIN',
        'Production slot (week)',
        'Units',
        'Brand'
    );
    $c_d         = join("?p?", $client_data);
    include('session.php');
    echo "Order No:<br>";
    echo "<input type='text' name='Order No.' id='Order No.' value='" . $zam . "' size='100'><br>";
    echo "<button id='save_button' col1='" . $col1 . "' col2='" . $col1 . "' onclick='ssave(this)' user='" . $user_check . "' order='" . $c_d . "'>save</button>";
}
function poka_edit($war, $col)
{
    include("config_0.php");
    $tab  = "TABLE2";
    $link = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $query  = "SELECT * FROM $tab WHERE";
    $n_kolu = 0;
    $porow  = array(
        "wheel size",
        "Nominal5 wheel",
        "QAD NR"
    );
    foreach ($porow as $p) {
        $kolu[$n_kolu] = array_search($p, $col, true);
        $n_kolu++;
    }
    $li = 0;
    foreach ($kolu as $l) {
        if ($col[$l] !== "0") {
            if ($li == 0) {
                $query = "$query `$col[$l]` LIKE '$war[$l]'";
            } else {
                $query = "$query AND`$col[$l]` LIKE '$war[$l]'";
            }
            $li = $li + 1;
        }
    }
    $result = mysqli_query($link, $query);
    if (!$result) {
        die('Invalid quer2y: 18 ' . mysql_error());
    }
    $kolumny    = "SHOW COLUMNS FROM $tab";
    $result_kol = mysqli_query($link, $kolumny);
    if (!$result_kol) {
        die('Invalid query: ' . mysql_error());
    }
    $x  = 0;
    $x2 = 0;
    while ($row1 = mysqli_fetch_array($result_kol)) {
        $tytul[$x] = $row1[0];
        $x         = $x + 1;
    }
    while ($row = mysqli_fetch_array($result)) {
        for ($i = 0; $i < count($tytul); ++$i) {
            $wartedit[$tytul[$i]] = $row[$i];
            $wartedit[$i]         = $tytul[$i];
        }
    }
    $wartedit['size'] = $i;
    return $wartedit;
}
function showtablebezpic($war2, $col2, $zam)
{
    $war = explode('?', $war2, -1);
    $col = explode('?', $col2, -1);
    echo "<table class='one' style='width:100%' margin-top: 500px>";
    echo "<td class='two'>Order No.</td>";
    echo "<td class='one'>" . $zam . "</td>";
    for ($i = 0; $i < count($war); ++$i) {
        echo "<tr>";
        echo "<td class='two'>" . $war[$i] . "</td>";
        echo "<td class='one'>" . $col[$i] . "</td>";
        echo "</tr>";
    }
    echo "</table><br>";
}
function showtableIT($war2, $col2, $zam, $comm,$ver)
{
    $war  = explode('?', $war2);
    $col  = explode('?', $col2);
    $tg0  = tlumacz_grup();
    //print_r($tg0[2]);
    $tg   = $tg0[2]; // 2 to IT, 0 to PL
    $cena = $tg0[1];
    $c    = 0;
    echo "<table class='one' style='width:100%' margin-top: 500px>";
    if($ver==1){ 
    echo "<col width=20%>";
    echo "<col width=30%>";
    echo "<col width=30%>";
    echo "<col width=2%>";
      echo "<col width=18%>";
      }
    echo "<tr>";
    echo "<td class='it1'>Numero ordine:</td>";
    echo "<td class='it2'>" . tlumacz3($zam, $tg) . "</td>";
    if($ver==1){ 
    echo "<td class='it2'>Translation to IT:</td>";
    }
    echo "</tr>";
    for ($i = 0; $i < count($war); ++$i) {

        echo "<tr>";
        echo "<td class='it1' id='".$i."' org='".$war[$i]."' onclick='to_translate(this)'>" . tlumaczIT($war[$i]) . "</td>";
        if($ver==1){ 
        echo "<td class='it2'>" . $col[$i] . "</td>"; // dla PL tlumacz bez it
      //  $b = tlumacz4($col[$i], $cena, $war[$i]);
      //print_r(isset($tg[$col[$i]]));
      if ($tg[$col[$i]]!=null){
        echo "<td class='it2'><textarea id='".$i."_".$col[$i]."'  style='width:90%;'>" . tlumaczIT($col[$i]) . "</textarea></td>";
      }else{
        echo "<td class='it2'><textarea id='".$i."_".$col[$i]."'  style='width:90%;'></textarea></td>";
      } 
      echo "<td class='it3'><button class='button0' id='".$i."' row='".$i."' name='".$col[$i]."'
          onclick='save_slownikIT(this)'>save</button></td>" ;      
      }else{
      echo "<td class='it2'>" . tlumaczIT($col[$i], $tg). "</td>"; // dla PL tlumacz bez it
      }
      
           
                    
         $price = $price + $b;
        $dane1 = str_replace("/", "", $col[$i]);
        $dane1 = str_replace(":", "", $dane1);
        $dane1 = substr($dane1, 0, 202);
         $dane1=yes_image($dane1,$war[$i]);
        if (file_exists("images/" . $dane1 . ".png")) {
            echo "<td class='white'> <a href='images/" . $dane1 . ".png' class='rys' target='_blank'><img src='images/" . $dane1 . ".png' class='resize' alt=''></a></td>";
        } else {
            echo "<td class='white'><a href='images/" . $dane1 . ".png' class='rys' target='_blank'><img src='images/" . $dane1 . ".png' alt='' class='resize' onerror='imgError(this)'></a></td>";
        }

        echo "</tr>";
    }
    echo "<td class='it1'>Descrizione non standard</td>";
     if($ver==1){
    echo "<td class='it2' >".$comm."</td>";
    if ($tg[$comm]!=null){
    echo "<td class='it2' ><textarea id='584_".$comm."' style='width:90%;'>" . str_replace('<br />','&#10;',tlumaczIT($comm))."</textarea></td>";
    } else{
     echo "<td class='it2' ><textarea id='584_".$comm."' style='width:90%;'></textarea></td>";
    }
    // print_r($tg);
     echo "<td class='it3'><button class='button0' id='584' name='".$comm."'
          onclick='save_slownikIT(this)'>save</button></td>" ; 
    }else{
    echo "<td class='it2' >" . tlumaczIT($comm) . "</td>";
    }
    //echo "<td class='four' >" . tlumacz3($comm, $tg) . "</td>";
    echo "</table><br>";
    //echo "<div><p align='right' style='position:fixed; right:10px; bottom:10px;'>total price:" . $price . "</p></div>";
}
function showtablePL($war2, $col2, $zam, $comm)
{
    $war  = explode('?', $war2);
    $col  = explode('?', $col2);
    $tg0  = tlumacz_grup();
    //print_r($tg0[2]);
    $tg   = $tg0[0]; // 2 to IT, 0 to PL
    $cena = $tg0[1];
    $c    = 0;
    echo "<table class='one' style='width:100%' margin-top: 500px>";
    echo "<tr>";
    echo "<td class='three'>Nr zamowienia:</td>";
    echo "<td class='four'>" . tlumacz3($zam, $tg) . "</td>";
    echo "</tr>";
    for ($i = 0; $i < count($war); ++$i) {
        echo "<tr>";
        echo "<td class='three'>" . tlumacz3($war[$i], $tg) . "</td>";
        echo "<td class='four'>" . tlumacz3($col[$i], $tg) . "</td>"; // dla PL tlumacz bez it
        $b = tlumacz4($col[$i], $cena, $war[$i]);
        echo "<td class='four'>" . $b . "</td>";
        $price = $price + $b;
        $dane1 = str_replace("/", "", $col[$i]);
        $dane1 = str_replace(":", "", $dane1);
        $dane1 = substr($dane1, 0, 202);
         $dane1=yes_image($dane1,$war[$i]);
        if (file_exists("images/" . $dane1 . ".png")) {
            echo "<td class='white'> <a href='images/" . $dane1 . ".png' class='rys' target='_blank'><img src='images/" . $dane1 . ".png' class='resize' alt=''></a></td>";
        } else {
            echo "<td class='white'><a href='images/" . $dane1 . ".png' class='rys' target='_blank'><img src='images/" . $dane1 . ".png' alt='' class='resize' onerror='imgError(this)'></a></td>";
        }
        echo "</tr>";
    }
    echo "<td class='three'>Opis niestandardu</td>";
    echo "<td class='four' >" . tlumacz3($comm, $tg) . "</td>";
    echo "</table><br>";
    //echo "<div><p align='right' style='position:fixed; right:10px; bottom:10px;'>total price:" . $price . "</p></div>";
}
function showtablePLENG($war2, $col2, $zam)
{
    $war = explode('?', $war2);
    $col = explode('?', $col2);
    echo "<table class='one' style='width:100%' margin-top: 500px>";
    echo "<td class='two'>Order No.</td>";
    echo "<td class='three'>Nr zamowienia:</td>";
    echo "<td class='one'>" . $zam . "</td>";
    echo "<td class='four'>" . tlumacz($zam) . "</td>";
    for ($i = 0; $i < count($war); ++$i) {
        echo "<tr>";
        echo "<td class='two'>" . $war[$i] . "</td>";
        echo "<td class='three'>" . tlumacz($war[$i]) . "</td>";
        echo "<td class='one'>" . $col[$i] . "</td>";
        echo "<td class='four'>" . tlumacz($col[$i]) . "</td>";
        echo "</tr>";
    }
    echo "</table><br>";
}
function tlumacz3($szuk, $tg)
{
    if (isset($tg[$szuk])) {
        return $tg[$szuk];
    } else {
        return $szuk;
    }
}
function tlumacz4($szuk, $tg, $opcja)
{
    if ($szuk == "YES") {
        $szuk = $opcja;
    }
    if ($szuk == "NO") {
        $szuk = "zorro";
    }
    if (isset($tg[$szuk])) {
        if ($tg[$szuk] == 0) {
            $wynik = "TBC";
        } else {
            $wynik = $tg[$szuk];
        }
    } else {
        $wynik = "";
    }
    return $wynik;
}
function tlumacz5($szuk, $tg, $opcja)
{
    if ($szuk == "YES") {
        $szuk = $opcja;
    }
    if (isset($tg[$szuk])) {
        if ($tg[$szuk] == 0) {
            $wynik = "TBC";
        } else {
            $wynik = $tg[$szuk];
        }
    } else {
        $wynik = "";
    }
    return $wynik;
}
function tlumacz($zapytanie)
{
    include("config_0.php");
    $tab  = "tlumacz";
    $link = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if (!$link->set_charset("utf8")) {
        printf("Error loading character set utf8: %s\n", $link->error);
    } else {
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $query  = "SELECT `COL 2` FROM `tlumacz` WHERE `COL 1` LIKE '" . $zapytanie . "'";
    $result = mysqli_query($link, $query);
    while ($row1 = mysqli_fetch_array($result)) {
        $col = $row1[0];
    }
    if (isset($col)) {
        if (EMPTY($col)) {
            return $zapytanie;
        } else {
            return $col;
        }
    } else {
        return $zapytanie;
    }
}
function tlumaczIT($zapytanie)
{
    include("config_0.php");
    $tab  = "tlumacz";
    $link = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if (!$link->set_charset("utf8")) {
        printf("Error loading character set utf8: %s\n", $link->error);
    } else {
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    //$query  = "SELECT `COL 2` FROM `tlumacz` WHERE `COL 1` LIKE '" . $zapytanie . "'";
       if($zapytanie!=''){
    $query  = "SELECT `IT` FROM `tlumacz` WHERE `COL 1` LIKE '". $zapytanie ."'";
    //print_r(htmlspecialchars($query));
    $result = mysqli_query($link, $query);
    while ($row1 = mysqli_fetch_array($result)) {
        $col = $row1[0];
    }
   //print_r($col);
    if (isset($col)) {
        if (EMPTY($col)) {
            return $zapytanie;
        } else {
            return $col;
        }
    } else {
        return $zapytanie;
    }
    }
}
function tlumacz_grup()
{
    include("config_0.php");
    $tab  = "tlumacz";
    $link = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if (!$link->set_charset("utf8")) {
        printf("Error loading character set utf8: %s\n", $link->error);
    } else {
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $query  = "SELECT `COL 1`,`COL 2`,`COL 3`, `IT` FROM `tlumacz`";
    $result = mysqli_query($link, $query);
    $m      = 0;
    while ($row1 = mysqli_fetch_array($result)) {
        if (!EMPTY($row1[1])) {
            $col[$row1[0]] = $row1[1];
        } else {
            $col[$row1[0]] = $row1[0];
        }
        $col_wart[$m] = $row1[0];
        ++$m;
        if (!EMPTY($row1[2])) {
            $ceny[$row1[0]] = $row1[2];
        } else {
            $ceny[$row1[0]] = "";
        }
        if (!EMPTY($row1[3])) {
            $it[$row1[0]] = $row1[3];
        } else {
            $it[$row1[0]] = "";
        }
    }
    $a[0] = $col;
    $a[1] = $ceny;
    $a[2] = $it;
    //print_r($it);
    return $a;
}
function tlumacz_grup2()
{
    include("config_0.php");
    $tab  = "tlumacz";
    $link = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if (!$link->set_charset("utf8")) {
        printf("Error loading character set utf8: %s\n", $link->error);
    } else {
    }
    $db_selected = mysqli_select_db($link, $dbname);
    if (!$db_selected) {
        die('Nie mo_na ustawi_ databasy : ' . mysql_error());
    }
    $query  = "SELECT `COL 1`,`COL 2`,`COL 3` FROM `tlumacz`";
    $result = mysqli_query($link, $query);
    $m      = 0;
    while ($row1 = mysqli_fetch_array($result)) {
        if (!EMPTY($row1[1])) {
            $col[$row1[0]] = $row1[1];
        } else {
            $col[$row1[0]] = $row1[0];
        }
        $col_wart[$m] = $row1[0];
        ++$m;
        if (!EMPTY($row1[2])) {
            $ceny[$row1[0]] = $row1[2];
        } else {
            $ceny[$row1[0]] = "";
        }
    }
    $a[0] = $col;
    $a[1] = $ceny;
    $a[2] = $col_wart;
    return $a;
}
function wiersze($col, $user_check)
{
    echo "<table id ='loadtab' class='one' style='width:100%' margin-top: 500px>";
    echo "<col width=10%>";
    echo "<col width=3%>";
    echo "<col width=8%>";
    echo "<col width=8%>";
    echo "<col width=8%>";
    echo "<col width=5%>";
    echo "<col width=10%>";
    echo "<col width=39%>";
    echo "<col width=1%>";
    echo "<tr>";
    echo "<td class='one'>Order No:</td>";
    echo "<td class='one'>Ver.</td>";
    echo "<td class='one'>Vehicle</td>";
    echo "<td class='one'>PL No</td>";
    echo "<td class='one'>Date</td>";
    echo "<td class='one'>Made by</td>";
    echo "<td class='one'>Approved by</td>";
    echo "<td class='one'>Options</td>";
    echo "<td class='one'>NS</td>";
    echo "</tr>";
    for ($i = 0; $i < count($col); ++$i) {
        $col[$i][4] = str_replace("'", "?a?", $col[$i][4]);
        if (!empty($col[$i][11])) {
            $cla = 'prod';
        } else {
            $cla = 'dwa';
        }
        echo "<tr id='hd_" . $col[$i][0] . "'>";
        foreach (array(
            0,
            1,
            3,
            5,
            6
        ) as $n) {
            if ($n == 3) {
                $naglow = explode('?', $col[$i][$n - 1]);
                $typ    = explode('?', $col[$i][$n]);
                if ($naglow[0] == "Category") {
                    echo "<td class=$cla>" . $typ[0] . "</td>";
                    echo "<td class=$cla></td>";
                } else {
                    echo "<td class=$cla>" . $typ[7] . "</td>";
                    echo "<td class=$cla>" . $typ[0] . "</td>";
                }
            } else {
                echo "<td class=$cla>" . $col[$i][$n] . "</td>";
            }
        }
        $apr = str_replace("?o?", ", ", $col[$i][7]);
        $hid = str_replace("?o?", ", ", $col[$i][12]);
        doc_qad($apr, $cla);
        echo "<td class=$cla>";
        if ($user_check == "admin") {
            echo "<button onclick='deleteFunction(this)' id='" . $col[$i][0] . "'>delete</button>";
        }
        echo "<button class='button0' style='vertical-align:middle' onclick='showdiffFunction(this)' id='" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' clientd='" . $col[$i][9] . "'><span>show</span></button>";
        echo "<button class='button0' style='vertical-align:middle' onclick='showPLFunction(this)' id='" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' clientd='" . $col[$i][9] . "'><span>show(PL)</span></button>";
        echo "<button class='button0' style='vertical-align:middle' onclick='showITFunction(this)' name=1 id='" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' clientd='" . $col[$i][9] . "'><span>Translate(IT)</span></button>";
        echo "<button class='button0' style='vertical-align:middle' onclick='showITFunction(this)' name=0 id='" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' clientd='" . $col[$i][9] . "'><span>show(IT)</span></button>";
        if (!empty($col[$i][11])) {
            echo "<button class='button0' style='vertical-align:middle' onclick='editFunction_prod(this)' id='" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' clientd='" . $col[$i][9] . "'><span>edit</span></button>";
        } else {
            echo "<button class='button0' style='vertical-align:middle' onclick='editFunction(this)' id='" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' clientd='" . $col[$i][9] . "'><span>edit</span></button>";
        }
        if ($user_check != "guest") {
            if (strpos($apr, $user_check) !== false) {
                echo "<button class='button0' style='vertical-align:middle' onclick='approve(this)' id='" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' user='" . $user_check . "' disabled><span>Approve</span></button>";
            } else {
                echo "<button class='button0' style='vertical-align:middle' onclick='approve(this)' id='" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' user='" . $user_check . "'><span>Approve</span></button>";
            }
            if (strpos($hid, $user_check) !== false) {
                echo "<button class='button0' style='vertical-align:middle' onclick='Hide(this)' id='" . $col[$i][0] . "' name='" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' ifh='1' user='" . $user_check . "'><span>Unhide</span></button>";
            } else {
                echo "<button class='button0' style='vertical-align:middle' onclick='Hide(this)' id='" . $col[$i][0] . "' name='" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' user='" . $user_check . "' data-toggle='tooltip' data-placement='bottom' title='hide this order only for ".$user_check ."'><span>Hide</span></button>";
            }
        }
        if ($user_check == "admin" || $user_check == "d.stanek") {
            echo "<button class='button0' style='vertical-align:middle' onclick='approve_production(this)' id='" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' user='" . $user_check . "'><span>To production</span></button>";
        }
        //echo "<a class='button0' style='vertical-align:middle'  id='" . "send" . $col[$i][0] . "' href='DDT/".$col[$i][0].".html' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' ver='" . $col[$i][1] . "' user='" . $user_check . "'><span>Download</span></a>";
      // if( file_exists("saved/".$col[$i][0]."_v".$col[$i][1].".pdf")){
       echo "<button class='button0' style='vertical-align:middle; margin-left: 40px;' onclick='Download(this)' id='" . "send" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' ver='" . $col[$i][1] . "' user='" . $user_check . "'><span><i class='glyphicon glyphicon-download-alt'></i></span></button>";
       // }else{
       // echo "<button class='button0' style='vertical-align:middle; margin-left: 40px;' onclick='Download_ex(this)' id='" . "send" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' ver='" . $col[$i][1] . "' user='" . $user_check . "'><span>Download</span></button>";
       // }
        echo "<button class='button0' style='vertical-align:middle; margin-left: 5px;' onclick='sendorderPDF(this)' id='" . "send" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' ver='" . $col[$i][1] . "' user='" . $user_check . "'><span>send email</span></button>";
        if ($user_check == "g.szkop") {
            echo "<button class='button0' style='vertical-align:middle' onclick='sendorderPDF_AK(this)' id='" . "send" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' ver='" . $col[$i][1] . "' user='" . $user_check . "'><span>AK</span></button>";
            //print_r(false);
            if(file_exists("DDT/".$col[$i][0].".html")){
            echo "<a class='button0' style='vertical-align:middle'  id='" . "send" . $col[$i][0] . "' href='DDT/".$col[$i][0].".html' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' ver='" . $col[$i][1] . "' user='" . $user_check . "'><span>DDT</span></a>";
          }else{
            echo "<button class='button0' style='vertical-align:middle' onclick='make_DDT(this)' id='" . "send" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' ver='" . $col[$i][1] . "' user='" . $user_check . "'><span>new DDT</span></button>";
          }
          }
          if ($user_check == "k.murri" || $user_check == "r.silvestri" || $user_check == "a.forcucc" || $user_check == "m.kuzbinski" || $user_check == "a.straccini") {
            if(file_exists("DDT/".$col[$i][0].".html")){
            echo "<a class='button0' style='vertical-align:middle'  id='" . "send" . $col[$i][0] . "' href='DDT/".$col[$i][0].".html' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' ver='" . $col[$i][1] . "' user='" . $user_check . "'><span>DDT</span></a>";
          }else{
            echo "<button class='button0' style='vertical-align:middle' onclick='make_DDT(this)' id='" . "send" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' ver='" . $col[$i][1] . "' user='" . $user_check . "'><span>new DDT</span></button>";
          }
          }
          //|| $user_check == "d.stanek"
        echo "<button class='button0' style='vertical-align:middle' onclick='make_PDF(this)' id='" . "send" . $col[$i][0] . "' col1='" . $col[$i][2] . "' col2='" . $col[$i][3] . "' comm='" . $col[$i][4] . "' ver='" . $col[$i][1] . "' user='" . $user_check . "'><span>Print</span></button>";
        if (!empty($col[$i][11])) {
            echo " <br>  <span style='color: #0000ae'><b>in production since " . $col[$i][10] . "</b></span>";
        }
        echo "</td>";
        echo "<td class=$cla ><span style='height:1px; ' name='" . $col[$i][4] . "'>";
        if (!empty($col[$i][4])) {
            echo "<div class='nonst'>";
            echo "<div class='opis-content' align='left' style='position:fixed; left:10%; right:10%; top:300px;  background-color: #F8F7F8;'>";
            echo "<span style='font-size: 25px;'>Non standard description:<br><br></span>" . $col[$i][4] . "</div>";
        }
        echo "</div></td>";
        echo "</tr>";
    }
    echo "</table>";
}

 function tab_nadwozie($szukana, $wert_szuk){
    $nad=get_nadwozie();
      include('session.php');
     // print_r($szukana);
      echo "<br>";
for($n=0;$n<count($nad[1]);$n++){
          $wiersz[$n]=$nad[1][$n][1].$nad[1][$n][2].$nad[1][$n][3].$nad[1][$n][4].$nad[1][$n][5].$nad[1][$n][6].$nad[1][$n][7];
         //print_r($wiersz[$n]);
       //  echo "<br>";
 if ($wiersz[$n]==$szukana){
 $czy_znalazl=1;
 //print_r($szukana);
 $to=$n;
  	echo "<table class='one' style='width:100%'><caption
     style='text-align: center;color: black;
     background-color: #eee;border: 2px solid #FFFFFF;'>Upper structure</caption>";
     echo "<col width=50%>";
  echo "<col width=50%>";
  // echo"<tr>";
           for($k=1;$k<8;$k++){
           echo "<tr><td class='one' id='nadt_$k' style='text-align: right;'>".$nad[0][$k]."</td><td  id='nad_$k' class='one'>".$wert_szuk[$k-1]."</td></tr>";
  }
         for($k=8;$k<count($nad[0]);$k++){
         // $wiersz[$k]=$nad[1][$k][1].$nad[1][$k][2].$nad[1][$k][3].$nad[1][$k][4].$nad[1][$k][5].$nad[1][$k][6].$nad[1][$k][7];
             if($nad[1][$to][$k]!=null){
           echo "<tr><td class='one' id='nadt_$k' style='text-align: right;'>".$nad[0][$k]."</td><td  id='nad_$k' class='one'>".$nad[1][$to][$k]."</td></tr>";
          }else{
          echo "<tr><td class='one' id='nadt_$k' style='text-align: right;'>".$nad[0][$k]."</td><td class='one'>
           <textarea  id='nad_$k' style='width:90%;height:30px;'></textarea></td></tr>";
          }
 }
     // echo "<tr>";
  	echo "</table>";
 }else{
 if ($user_check == 'g.szkop' || $user_check == 'admin') {

    //  print_r($user_check) ;
      $to=$n;
  if($n==count($nad[1])-1 && $czy_znalazl!=1){

     	echo "<table class='one' style='width:100%'><caption
     style='text-align: center;color: black;
     background-color: #eee;border: 2px solid #FFFFFF;'>Upper structure</caption>";
     echo "<col width=50%>";
  echo "<col width=50%>";
  // echo"<tr>";
         for($k=1;$k<8;$k++){
           echo "<tr><td id='nadt_$k' class='one' style='text-align: right;'>".$nad[0][$k]."</td><td  id='nad_$k' class='one'>".$wert_szuk[$k-1]."</td></tr>";
  }
           for($k=8;$k<count($nad[0]);$k++){
         // $wiersz[$k]=$nad[1][$k][1].$nad[1][$k][2].$nad[1][$k][3].$nad[1][$k][4].$nad[1][$k][5].$nad[1][$k][6].$nad[1][$k][7];

           echo "<tr><td class='one' id='nadt_$k' style='text-align: right;'>".$nad[0][$k]."</td><td class='one'>
           <textarea  id='nad_$k' style='width:90%;height:30px;'></textarea></td></tr>";

  //print_r("ert");
  }
 }


  }}
}
echo "</table>";
 if ($user_check == 'g.szkop' || $user_check == 'admin') {
  echo "<div style='margin-left:50%'><button id='save_button_nadwozie' class='button0'  onclick='save_nadwozie(this)' user='" . $user_check . "' >save upper structure info</button></div>";
  // echo "<p id='test_tut' >test</p>";




 }
//print_r($nad);
  //print_r($szukana);
//print_r($nagl);

 }
  function tab_nadwozie_string($szukana){
  // do wysyia
    $nad=get_nadwozie();
         $fsiz="9px";
for($n=1;$n<count($nad[1]);$n++){
          $wiersz[$n]=$nad[1][$n][1].$nad[1][$n][2].$nad[1][$n][3].$nad[1][$n][4].$nad[1][$n][5].$nad[1][$n][6].$nad[1][$n][7];
 if ($wiersz[$n]==$szukana){
 $to=$n;
  	$string="<table class='one'  style='width: 100%; border-collapse: collapse;'>
    <caption style='font-size: ".$fsiz."; border-bottom: 1px solid #ddd;'>Upper structure:</caption>";
    $string.="<col width=50%>";
 $string.= "<col width=50%>";
  // echo"<tr>";
         for($k=8;$k<count($nad[0]);$k++){
          $wiersz[$k]=$nad[1][$k][1].$nad[1][$k][2].$nad[1][$k][3].$nad[1][$k][4].$nad[1][$k][5].$nad[1][$k][6].$nad[1][$k][7];

         $string.="<tr><td style='width:20%; font-size: ".$fsiz."; border-bottom: 1px solid #ddd;text-align: right;'>
           ".$nad[0][$k]."</td><td style='width:20%; font-size: ".$fsiz."; border-bottom: 1px solid #ddd;border-left: 1px solid #ddd;'>".$nad[1][$to][$k]."</td></tr>";

 }
     // echo "<tr>";
  	$string.="</table>";
 }
}
 return $string;
  //print_r($szukana);
//print_r($nagl);

 }
 function szuk_nad($nagl,$wybrane){
 //szuka nadwozie
 for($k=1;$k<count($nagl);$k++){

  if($nagl[$k]=="dropside"){

 $szukana[0]=$wybrane[$k];

 }

  if ($nagl[$k]=="front wall"){
$szukana[1]=$wybrane[$k];
 }
  if ($nagl[$k]=="upper structure"){
 $szukana[2]=$wybrane[$k];

 }
   if ($nagl[$k]=="roof type"){
 $szukana[3]=$wybrane[$k];
 }
   if ($nagl[$k]=="double plywood on front wall" && $wybrane[$k]!="NO"){
 $szukana[4]=$wybrane[$k];
 }
   if ($nagl[$k]=="internal heights"){
 $szukana[5]=$wybrane[$k];
 }
    if ($nagl[$k]=="upper structure planks"){
 $szukana[6]=$wybrane[$k];
 }

 }
$szukana1[0]=join('',$szukana);
$szukana1[1]=  $szukana;
  return $szukana1;
 }

?>
