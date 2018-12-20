<?php
session_start();
include "includes/koneksi.php";
$id_content = $_GET['id_content'];

$sql = "SELECT * FROM tb_content WHERE id_content ='$id_content'";
$data = $mysqli->query($sql);
$rowData = $data->fetch_object();

$sql2 = "SELECT * FROM tb_harga WHERE id_content ='$id_content'";
$harga = $mysqli->query($sql2);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/semantic.min.css" />
    <link rel="shortcut icon" href="favicon-16x16.png">

    
    <meta charset="utf-8">
</head>

<body>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
    <div class="ui right aligned grid">
        <div class="center aligned sixteen wide column">
            <div class="ui secondary white menu">
                <a class="ui item" href="index.php">
                    <img class="ui small rounded image" src="logo.png">
                </a>
                <a class="active item">
                      Home
                    </a>
                <a class="item">
                      Messages
                    </a>
                <a class="item">
                      Friends
                    </a>
                <div class="right menu">
                    <div class="item">
                        <div class="ui icon input">
                            <input type="text" placeholder="Search...">
                            <i class="search link icon"></i>
                        </div>
                    </div>

                    <?php
                    if(isset($_SESSION['username'])){
                        echo <<< SESSION
                        <a href="includes/logout.inc.php?logout=true" class="ui item">
                            Log Out
                        </a>
SESSION;
                    }else{
                        echo <<< NOTLOGIN
                        <a href="register.php" class="ui item">
                            Sign Up
                        </a>
                        <a href="login.php" class="ui item">
                            Sign In
                        </a>
NOTLOGIN;
                        
                    }
                    
                    ?>
                </div>
            </div>
            <div class="center aligned sixteen wide centered column">

            </div>
            <div class="ui ten wide container">

            </div>
        </div>
        <div class="sixteen wide centered column" style="text-align: left; font-size: 35px ">
            <?php echo $rowData->title;?>
        </div>
        
        <div class="four wide column" style="padding-left: 50px">
            <div class="ui raised segment">
            <?php echo "<img class='ui medium image' src='images/$rowData->path_img'>";?>
            </div>
        </div>

        <div class="eight wide column">
            <p style="text-align: center">Event's Detail</p>
            <div class="ui green raised segment">
                    <div class="ui divided selection list">
                            <div class="ui grid container">
                                <div class="four wide column">
                                    <a class="item">
                                        <div class="ui left floated fluid horizontal label" style="text-align: center">Date</div>
                                        <p style="text-align: center; font-size: 20px"><?php echo $rowData->date?></p>
                                    </a>
                                </div>

                                <div class="four wide column">
                                    <a class="item">
                                        <div class="ui left floated fluid horizontal label" style="text-align: center">Location</div>
                                        <p style="text-align: center; font-size: 20px"><?php echo $rowData->location?></p>
                                    </a>
                                </div>

                                <div class="four wide column">
                                    <a class="item">
                                            <div class="ui left floated fluid horizontal label" style="text-align: center">Time</div>
                                            <p style="text-align: center; font-size: 20px"><?php echo $rowData->time?></p>
                                    </a>
                                </div>

                                <div class="four wide column">
                                    <a class="item">
                                            <div class="ui left floated fluid horizontal label" style="text-align: center">Quota</div>
                                            <p style="text-align: center; font-size: 20px"><?php echo $rowData->kuota?></p>
                                    </a>
                                </div>
                            </div>    
                    </div>
                <h2 style="text-align: justify"><?php echo "$rowData->content";?></h2>
            </div>
        </div>

        <div class=" four wide column" style="text-align: left; padding-right: 50px">
            Ticket Info
            <div class="ui blue raised segment">
                    <!-- <h3>$rowHarga->kategori</h3> -->
                    <form action="<?php echo isset($_SESSION['username'])?"rincian.php?id_content=$rowData->id_content":"login.php" ?>" method="GET">
                        <div class="ui form">
                            <div class="one fields">
                                <div class="field">
                                    <label>Jenis Tiket</label>
                                    <select id="jenis" onchange="getPrice()" name='jenis' class="ui search dropdown">
                                    <option value="jenis tiket"></option>
                                        <?php
                                        while($rowHarga = $harga->fetch_object()){
                                            echo <<< CONTENT
                                            <option value="$rowHarga->harga">$rowHarga->kategori</option>
CONTENT;
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="field">
                                <h2 id="demo"></h2>
                            </div>

                            <div class="one fields">
                                <div class="field">
                                    <label>Jumlah Tiket</label>
                                    <select id="jumlah" name='jumlah' class="ui fluid search dropdown">
                                        <option value="jumlah tiket"></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>

                            <input class="ui blue button" type="submit" value="Beli Tiket">
                            </form>
                        </div>
                    </div>
                    
            </div>
        </div>
        <div class="ui ten wide container">

        </div>
        <div class="center aligned fifteen wide centered column">
        </div>

        <script>
            function getPrice(){
                var x = document.getElementById("jenis").value;
                document.getElementById("demo").innerHTML = "Rp "+x+"/pcs";
            }
        </script>

        <script>
            $('select.dropdown')
                .dropdown();
        </script>
       
</body>

</html>