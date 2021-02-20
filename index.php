<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>最安発送.com</title>
    <link rel="icon" href="499_h_h.png">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  </head>
  <body>
      <div class="header">
        <ul class="menu">
          <li class="list"><a href="index.html">Home</a></li>
          <li class="list"><a href="about.html">About</a></li>
          <li class="list">
            <a href="#" class="init-bottom">Learn More</a>
            <ul class="menu_second">
              <li class="list_second"><a href="https://www.post.japanpost.jp/send/fee/kokunai/one_two.html">日本郵便</a></li>
              <li class="list_second"><a href="https://www.mercari.com/jp/rakuraku-mercari/">らくらくメルカリ</a></li>
              <li class="list_second"><a href="https://www.mercari.com/jp/yuyu-mercari/">ゆうゆうメルカリ</a></li>
            </ul>
          </li>
        </ul>
      </div>
    <div class="main">
      <div class="results">
        <h3>結 果</h3>
        <?php
        if (is_numeric($_GET["x"]) && is_numeric($_GET["y"]) && is_numeric($_GET["z"])){
          $x = $_GET["x"];
          $y = $_GET["y"];
          $z = $_GET["z"];

          if ($x <= 1 && $y <= 23 && $z <= 12){
              echo "<p><span>発送方法</span>：定形郵便　","<span>　　　　料金：</span>84円 (~25g) , 94円 (~50g)</p>";
          }

          elseif ($x <= 3 && $y <= 25 && $z <= 34){
              echo "<p><span>発送方法：</span>定形外郵便　規格内　","<span>　料金：</span>120円 (~50g) , ","140円 (~100g)<br \></p>";
              echo "<p><span>発送方法：</span>ゆうパケット　","<span>　　　　料金：</span>200円 (~1kg)<br \></p>";
              echo "<p><span>発送方法：</span>ゆうパケットポスト　","<span>　料金</span>：200円 + 65円(専用箱) (~2kg)</span><br \></p>";
              echo "<p><span>発送方法：</span>レターパックライト　","<span>　料金</span>：370円 (~4kg)</p>";
          }

          elseif ($x <= 7 && $y <= 25){
            if ( $y<= 17 && $z <= 24){
              echo "<p><span>発送方法：</span>ゆうパケットプラス　","<span>　　　料金：</span>375円+65円(専用箱) (~2kg)</p>";
              }
            elseif ($x <= 5 && $z <= 25 && $y <= 20){
              echo "<p><span>発送方法：</span>宅急便コンパクト　","<span>　　　　料金：</span>380円+70円(専用箱)</p>";
            }
            elseif($x <= 6 && $z <= 34){
              echo "<p><span>発送方法：</span>レターパックプラス　","<span>　　　　料金：</span>520円 (~4kg)</p>";
            }
          }

          else {
            if($z <= 60 && $x+$y+$z <= 60){
              echo "<p><span>発送方法：</span>定形外郵便　","<span>　    　　　　　料金：</span>200円~710円 (50g~1kg)<br \></p>";
              echo "<p><span>発送方法：</span>宅急便(らくらくメルカリ) 　または<br \>　　　　　 ゆうパック(ゆうゆうメルカリ)　",
              "<span>　　　　料金：</span>700円 </p>";
            }
            elseif($z <= 60 && $x+$y+$z <= 80){
              echo "<p><span>発送方法：</span>定形外郵便　","<span>　　　　料金：</span>200円~710円 (50g~1kg)<br \></p>";
              echo "<p><span>発送方法：</span>宅急便(らくらくメルカリ)　 または<br \>　　　　　 ゆうパック(ゆうゆうメルカリ)　",
              "<span>　　　　料金：</span>800円 </p>";
            }
            elseif($x+$y+$z <= 100){
              echo "<p><span>発送方法</span>：宅急便(らくらくメルカリ)　 または<br \>　　　　　 ゆうパック(ゆうゆうメルカリ)　",
              "<span>　　　　料金</span>：1000円</span> </p>";
            }
            elseif($x+$y+$z <= 120){
              echo "<p><span>発送方法：</span>宅急便(らくらくメルカリ)　", "<span>　　　　料金：</span>1100円 (~15kg)</span> </p>";
            }
            elseif($x+$y+$z <= 140){
              echo "<p><span>発送方法：</span>宅急便(らくらくメルカリ)　", "<span>　　　　料金：</span>1300円 (~20kg)</span> </p>";
            }
            elseif($x+$y+$z <= 160){
              echo "<p><span>発送方法：</span>宅急便(らくらくメルカリ)　", "<span>　　　　料金：</span>1600円 (~25kg)</span> </p>";
            }
          }
        }
        else{
          echo "<h4>適切な値が入力されていません。</h4>";
        }

        ?>
      </div>
    </div>
  </body>
</html>
