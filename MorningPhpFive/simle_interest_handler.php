<?php
if(isset($_GET["btn_calc"])){
    $Principal=$_GET["p"];
    $Rate=$_GET["r"];
    $Time=$_GET["t"];
    $Total=$Principal*$Rate*$Time;
        echo $Total;
}else{
    echo"come on stop being stupid";
}
