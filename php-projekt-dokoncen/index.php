<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo 'Hello world!<br /><br />';
        $Boolean = true;
        $String = "cena";
        $Float = 69.4;
        $Integer = 69;
        $a = $String . $Float;
        
        echo $a;
        echo '<br /><br />';
        echo $Boolean;
        echo '<br /><br />';
        echo $String;
        echo '<br /><br />';
        echo $Float;
        echo '<br /><br />';
        echo $Integer;
        echo '<br /><br />';
        echo '<strong>Tučný text</strong>';
        echo '<br /><br />';
        
        print 'Hello world! <br /><br />';
        print $Boolean;
        print '<br /><br />';
        print $String;
        print '<br /><br />';
        print $Float;
        print '<br /><br />';
        print $Integer;
        print '<br /><br />';
        echo '<img src="dům.jpg" alt="test" width="200" height="200">';
        print '<br /><br />';
        
        echo '<strong>\\</strong><br /><br />';
        
        $b = 4;
        $c = 8;
        
        var_dump($b+$c);
        var_dump($b-$c);
        var_dump($b/$c);
        var_dump($b*$c);
        var_dump($b++);
        var_dump($b--);
        var_dump($b+=$c);
        var_dump($b-=$c);
        var_dump($b*=$c);
        var_dump($b/=$c);
        var_dump($b==$c);
        var_dump($b!=$c);
        var_dump($b>$c);
        var_dump($b<$c);
        var_dump($b||$c);
        var_dump($b&&$c);
        var_dump(!$b);
      
        echo '<br /><br />';
        
       echo '<strong>Zde zacina reseni druheho ukolu</strong><br /><br />';
       
       $MartinBarta1 = 2;
       $MartinBarta2 = 1;
       
       if ($MartinBarta1 > $MartinBarta2) {
       echo 'Martin Bárta';
       }
       
        echo '<br /><br />';
       
       if ($MartinBarta1 < $MartinBarta2) {
           echo 'Martin';
       } 
       else {
           echo 'Bárta';   
       }
       
       echo '<br /><br />';
       
       
       if ($MartinBarta1 < 3) {
           echo 'Pravda';
       }
           if ($MartinBarta2 > 5) {
              echo 'Nepravda';
            }   
        
        echo '<br /><br />';
        
        switch ($MartinBarta1) {
            case 1:
                echo '1';
                break;
            case 2;
                echo '2';
                break;
            case 3:
                echo '3';
                break;
            case 4;
                echo '4';
                break;
            case 5:
                echo '5';
                break;
            case 6;
                echo '6';
                break;
            default:
                echo 'Žádná z hodnot neplatí';
        }        
        
        echo '<br /><br />'; 
        
        {
        
        $produkty = array(

            1 => "Jablko",
            2 => "Banan",
            3 => "Jahoda",
            4 => "Merunka",
            5 => "Tresen",
            6 => "Brambora",
            7 => "Brokolice",
            8 => "Celer",
            9 => "Cibule",
            10 => "Dyne"
            
            );
            
            var_dump($produkty);
        
            echo $produkty[7];
            
        }
            
            $produkty2 = array (
            "Auta" => array (
                "OsobniAuta" => array (
                        "Audi" => array (
                            //Nazev
                            11 => "Audi ",
                            //Vlastnosti
                            12 => "Model: A1",
                            13 => "Max. Rychlost: 235km/h",
                            14 => "Cena: 534 900 Kč",
                            15 => "Čas z 0 na 100: 6.5s",
                            16 => "Koní: 197"
                    ),
                        "Skoda" => array (
                            //Nazev
                            17 => "Škoda ",
                            //Vlastnosti
                            18 => "Model: Fabia",
                            19 => "Max. Rychlost: 186km/h",
                            20 => "Cena: 279 900 Kč",
                            21 => "Čas z 0 na 100: 10.7s",
                            22 => "Koní: 95"
                    ),  
                        "Ford" => array (
                            //Nazev
                            23 => "Ford ",
                            //Vlastnosti
                            24 => "Model: Fiesta",
                            25 => "Max. Rychlost: 250km/h",
                            26 => "Cena: 358 900 Kč",
                            27 => "Čas z 0 na 100: 6.5s",
                            28 => "Koní: 271"
                    ),  
                        "Honda" => array (
                            //Nazev
                            29 => "Honda ",
                            //Vlastnosti
                            30 => "Model: Jazz",
                            31 => "Max. Rychlost: 173km/h",
                            32 => "Cena: 499 900 Kč",
                            33 => "Čas z 0 na 100: 9.5s",
                            34 => "Koní: 109"
                    ),   
                        "Hyundai" => array (
                            //Nazev
                            35 => "Hyundai ",
                            //Vlastnosti
                            36 => "Model: i10",
                            37 => "Max. Rychlost: 140km/h",
                            38 => "Cena: 229 990 Kč",
                            39 => "Čas z 0 na 100: 11.5s",
                            40 => "Koní: 67"
                    ),   
                        "Nissan" => array (
                            //Nazev
                            41 => "Nissan ",
                            //Vlastnosti
                            42 => "Model: Juke",
                            43 => "Max. Rychlost: 180km/h",
                            44 => "Cena: 404 900 Kč",
                            45 => "Čas z 0 na 100: 8.5s",
                            46 => "Koní: 101"
                    ),
                        "BMW" => array (
                            //Nazev
                            47 => "BMW ",
                            //Vlastnosti
                            48 => "Model: Coupé",
                            49 => "Max. Rychlost: 200km/h",
                            50 => "Cena: 825 500 Kč",
                            51 => "Čas z 0 na 100: 6s",
                            52 => "Koní: 160"
                    ),
                        "Peugeot" => array (
                            //Nazev
                            53 => "Peugeot ",
                            //Vlastnosti
                            54 => "Model: 108",
                            55 => "Max. Rychlost: 170km/h",
                            56 => "Cena: 245 000 Kč",
                            57 => "Čas z 0 na 100: 7.5s",
                            58 => "Koní: 97"
                    ),
                        "Kia" => array (
                            //Nazev
                            59 => "Kia ",
                            //Vlastnosti
                            60 => "Model: Rio",
                            61 => "Max. Rychlost: 210km/h",
                            62 => "Cena: 299 980 Kč",
                            63 => "Čas z 0 na 100: 9.5s",
                            64 => "Koní: 180"
                    ),
                        "Mazda" => array (
                            //Nazev
                            65 => "Mazda ",
                            //Vlastnosti
                            66 => "Model: CX-3",
                            67 => "Max. Rychlost: 155km/h",
                            68 => "Cena: 499 900 Kč",
                            69 => "Čas z 0 na 100: 8s",
                            70 => "Koní: 121"
                    ))));
                        

        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["Audi"][11];
        echo $produkty2["Auta"]["OsobniAuta"]["Audi"][13];
        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["Skoda"][17];
        echo $produkty2["Auta"]["OsobniAuta"]["Skoda"][18];
        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["Ford"][23];
        echo $produkty2["Auta"]["OsobniAuta"]["Ford"][27];
        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["Honda"][29];
        echo $produkty2["Auta"]["OsobniAuta"]["Honda"][34];
        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["Hyundai"][35];
        echo $produkty2["Auta"]["OsobniAuta"]["Hyundai"][38];
        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["Nissan"][41];
        echo $produkty2["Auta"]["OsobniAuta"]["Nissan"][42];
        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["BMW"][47];
        echo $produkty2["Auta"]["OsobniAuta"]["BMW"][49];
        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["Peugeot"][53];
        echo $produkty2["Auta"]["OsobniAuta"]["Peugeot"][58];
        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["Kia"][59];
        echo $produkty2["Auta"]["OsobniAuta"]["Kia"][61];
        echo '<br /><br />';
        echo $produkty2["Auta"]["OsobniAuta"]["Mazda"][65];
        echo $produkty2["Auta"]["OsobniAuta"]["Mazda"][67];
       
       
        ?>
    </body>
</html>