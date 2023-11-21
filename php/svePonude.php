<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web-shop mobiteli</title>
        <link rel="stylesheet" href="../css/stil.css">
        <!--link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"-->
    </head>

    <body>

        <div>
            <nav class="navigacija">
                <div class="w3-bar w3-black">
                    <a href="index.html" class="w3-bar-item w3-button"> Početna stranica </a>
                    <a href="Ponude.html" class="w3-bar-item w3-button"> Ponude </a>
                    <a href="Kontakt.html" class="w3-bar-item w3-button"> Kontakt</a>
                    <a href="registracija.html" class="w3-bar-item w3-button"> Registracija</a>
                </div>
            </nav>
        </div>

    <?php

    $server = "localhost";
    $database = "pzi";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server, $username, $password, $database);
    $query = "SELECT * FROM mobiteli";
    $res = mysqli_query($conn, $query);
    
    ?>

        <h1 class="w3-text-red">Web shop - mobitela</h1>
        <p> </p>
        <div class="w3-responsive"> Popis ponude:
            <table> <!-- class="w3-table-all"-->
                <tr> 
                    <th></th>
                    <th>Naziv uređaja</th>
                    <th>Proizođač</th>
                    <th>Opis</th>
                    <th>Slika</th>
                    <th>Cijena</th>
                </tr>

                <?php   
                while ($row = mysqli_fetch_array($res))
                {
                    echo"<tr>";
                    echo"<td>".$row['id']."</td>";
                    echo"<td>".$row['Naziv uredaja']."</td>";
                    echo"<td>".$row['Proizvodac']."</td>";
                    echo"<td>".$row['Opis']."</td>";
                    echo"<td><img src='".$row['Slika'].
                    "'width='100px' alt='".$row['Naziv uredaja']."'></td>";
                    echo"<td>".$row['Cijena']."</td>";
                    echo"</tr>";

                }
                mysqli_close($conn);
                ?>

<!--
                <tr>
                    <td>1.</td>
                    <td>Xiaomi 13 Pro Alpine Blue 512 GB</td>
                    <td style="text-align: center;">Xiaomi</td>
                    <td>
                        OS: Android 13
                        <br>
                        Zaslon: 6,67" AMOLED 1220 x 2712
                        <br>
                        Memorija: (RAM/ROM)
                        RAM: 12GB 
                        ROM: 512 GB
                        <br>
                        Baterija 5000 mAh
                        <br>
                        <a href="https://telemach.hr/uredjaji/mobiteli/xiaomi-13t-pro-alpine-blue-512gb/603678" target="_blank"> VIŠE</a>
                    </td>
                    <td> <img src="https://cdn.telemach.hr/public/upload/Xiaomi13T_Blue_Fryer_231004135042_500x700.png" width="100px" alt="Xiaomi 13 Pro Alpine blue" srcset=""> </td>
                    <td>611,45€</td>
                </tr>
                    
                <tr>
                    <td>2.</td>
                    <td>Xiaomi 13 Pro Alpine Blue 256 GB</td>
                    <td style="text-align: center;">Xiaomi</td>
                    <td> 
                        OS: Android 13
                        <br>
                        Zaslon: 6,67" AMOLED 1220 x 2712
                        <br>
                        Memorija: (RAM/ROM)
                        RAM: 8GB 
                        ROM: 256 GB
                        <br>
                        Baterija 5000 mAh
                        <br> <a href="https://telemach.hr/uredjaji/mobiteli/xiaomi-13t-pro-alpine-blue-512gb/603678" target="_blank"> VIŠE</a>
                    </td>
                    <td> <img src="https://cdn.telemach.hr/public/upload/Xiaomi13T_Blue_Fryer_231004133913_500x700.png" width="100px" alt="Xiaomi 13 Pro Alpine blue" srcset=""> </td>
                    <td>287,63€</td>
                </tr>
                    
                <tr>
                    <td>2.</td>
                    <td>Samsung Galaxy A14 5G Black 64 GB</td>
                    <td style="text-align: center;">Samsung</td>
                    <td> 
                        OS: Android 13
                        <br>
                        Zaslon: 6,6" AMOLED 1220 x 2712
                        <br>
                        Memorija: (RAM/ROM)
                        RAM: 4GB 
                        ROM: 64 GB
                        <br>
                        Baterija 5000 mAh
                        <br>  <a href="https://telemach.hr/uredjaji/mobiteli/samsung-galaxy-a14-5g-black-64gb/603603" target="_blank"> VIŠE</a>
                    </td>
                    <td> <img src="https://cdn.telemach.hr/public/upload/A14_F_230822091556_500x700.png" width="100px" alt="Samsung Galaxy A14" srcset=""> </td>
                    <td>287,63€</td>
            -->
                </tr>    
            </table>
        </div>
    </body>
</html>