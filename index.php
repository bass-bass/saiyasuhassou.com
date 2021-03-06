<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>最安発送.com</title>
    <link rel="icon" href="499_h_h.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="stylesheet.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MK7XSM4EF3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-MK7XSM4EF3');
    </script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Learn More</a>
              <div class="dropdown-menu bg-dark" aria-labelledby="dropdown08">
                <a class="dropdown-item" href="https://www.post.japanpost.jp/send/fee/kokunai/one_two.html">日本郵便</a>
                <a class="dropdown-item" href="https://www.mercari.com/jp/rakuraku-mercari/">らくらくメルカリ便</a>
                <a class="dropdown-item" href="https://www.mercari.com/jp/yuyu-mercari/">ゆうゆうメルカリ便</a>
              </div>
            </li>
          </ul>
        </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="main">
      <div class="results">
        <h3>結 果</h3>
        <?php
        if (is_numeric($_GET["x"]) && is_numeric($_GET["y"]) && is_numeric($_GET["z"])){
          $x = $_GET["x"];
          $y = $_GET["y"];
          $z = $_GET["z"];

          if ($x <= 1 && $y <= 23 && $z <= 12){
              echo "<p><span>発送方法</span>：定形郵便　","<span>料金：</span>84円 (~25g) , 94円 (~50g)</p>";
          }

          elseif ($x <= 3 && $y <= 25 && $z <= 34){
              echo "<p><span>発送方法：</span>定形外郵便　規格内　","<span>料金：</span>120円 (~50g) , ","140円 (~100g)<br \></p>";
              echo "<p><span>発送方法：</span>ゆうパケット　","<span>料金：</span>200円 (~1kg)<br \></p>";
              echo "<p><span>発送方法：</span>ゆうパケットポスト　","<span>料金</span>：200円 + 65円(専用箱) (~2kg)</span><br \></p>";
              echo "<p><span>発送方法：</span>レターパックライト　","<span>料金</span>：370円 (~4kg)</p>";
          }

          elseif ($x <= 7 && $y <= 25){
            if ( $y<= 17 && $z <= 24){
              echo "<p><span>発送方法：</span>ゆうパケットプラス　","<span>料金：</span>375円+65円(専用箱) (~2kg)</p>";
              }
            elseif ($x <= 5 && $z <= 25 && $y <= 20){
              echo "<p><span>発送方法：</span>宅急便コンパクト　","<span>料金：</span>380円+70円(専用箱)</p>";
            }
            elseif($x <= 6 && $z <= 34){
              echo "<p><span>発送方法：</span>レターパックプラス　","<span>料金：</span>520円 (~4kg)</p>";
            }
          }

          else {
            if($z <= 60 && $x+$y+$z <= 60){
              echo "<p><span>発送方法：</span>定形外郵便　","<span>料金：</span>200円~710円 (50g~1kg)<br \></p>";
              echo "<p><span>発送方法：</span>宅急便(らくらくメルカリ) 　または<br \>　　　　　 ゆうパック(ゆうゆうメルカリ)　",
              "<span>料金：</span>700円 </p>";
            }
            elseif($z <= 60 && $x+$y+$z <= 80){
              echo "<p><span>発送方法：</span>定形外郵便　","<span>　　　　料金：</span>200円~710円 (50g~1kg)<br \></p>";
              echo "<p><span>発送方法：</span>宅急便(らくらくメルカリ)　 または<br \>　　　　　 ゆうパック(ゆうゆうメルカリ)　",
              "<span>　　　　料金：</span>800円 </p>";
            }
            elseif($x+$y+$z <= 100){
              echo "<p><span>発送方法</span>：宅急便(らくらくメルカリ)　 または<br \>　　　　　 ゆうパック(ゆうゆうメルカリ)　",
              "<span>料金</span>：1000円</span> </p>";
            }
            elseif($x+$y+$z <= 120){
              echo "<p><span>発送方法：</span>宅急便(らくらくメルカリ)　", "<span>料金：</span>1100円 (~15kg)</span> </p>";
            }
            elseif($x+$y+$z <= 140){
              echo "<p><span>発送方法：</span>宅急便(らくらくメルカリ)　", "<span>料金：</span>1300円 (~20kg)</span> </p>";
            }
            elseif($x+$y+$z <= 160){
              echo "<p><span>発送方法：</span>宅急便(らくらくメルカリ)　", "<span>料金：</span>1600円 (~25kg)</span> </p>";
            }
          }
        }
        else{
          echo "<h4>適切な値が入力されていません。</h4>";

        }
        ?>
      </div>
    </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
