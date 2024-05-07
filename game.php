<?php 


$Won = "noStatos";

$box = array("","","","","","","","","");


if (isset($_POST['submit'])) {

    $box[0]= $_POST['box0'];
    $box[1]= $_POST['box1'];
    $box[2]= $_POST['box2'];
    $box[3]= $_POST['box3'];
    $box[4]= $_POST['box4'];
    $box[5]= $_POST['box5'];
    $box[6]= $_POST['box6'];
    $box[7]= $_POST['box7'];
    $box[8]= $_POST['box8'];
}

// logic method

if(($box[0]== 'x' && $box[1]== 'x' && $box[2] == 'x')||
($box[3]== 'x' && $box[4]== 'x' && $box[5] == 'x')||
($box[6]== 'x' && $box[7]== 'x' && $box[8] == 'x')||
($box[0]== 'x' && $box[3]== 'x' && $box[6] == 'x')||
($box[1]== 'x' && $box[4]== 'x' && $box[7] == 'x')||
($box[2]== 'x' && $box[5]== 'x' && $box[8] == 'x')||
($box[0]== 'x' && $box[4]== 'x' && $box[8] == 'x')||
($box[2]== 'x' && $box[4]== 'x' && $box[6] == 'x')
){
    $Won = "won";
    echo "<br> <p class='result'>x برنده بازی </p> <br>";
}



$blank = 0 ;

for ($i = 0 ; $i <= 8 ; $i++){
    if($box[$i] == ''){
        $blank = 1;
    }

}

if ($blank== 1 && $Won == "noStatos") {

    $i =  rand(0, 8) ;

    while($box[$i] != ''){
        
        $i = rand(0,8) ;
    }
    
    $box[$i] = 'o';
    if(($box[0]== 'o' && $box[1]== 'o' && $box[2] == 'o')||
    ($box[3]== 'o' && $box[4]== 'o' && $box[5] == 'o')||
    ($box[6]== 'o' && $box[7]== 'o' && $box[8] == 'o')||
    ($box[0]== 'o' && $box[3]== 'o' && $box[6] == 'o')||
    ($box[1]== 'o' && $box[4]== 'o' && $box[7] == 'o')||
    ($box[2]== 'o' && $box[5]== 'o' && $box[8] == 'o')||
    ($box[0]== 'o' && $box[4]== 'o' && $box[8] == 'o')||
    ($box[2]== 'o' && $box[4]== 'o' && $box[6] == 'o')||
    ($box[6]== 'o' && $box[4]== 'o' && $box[2] == 'o')
    ){
        $Won = 'won';
        
        echo "<br> <p class='result'>o برنده بازی  </p> <br>";
    }
}
else if ($Won == 'noStatos'){

    $Won = "draw";
    echo "<br><p class='result'> بازی مساوی شد </p> <br>";
}


?>


<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>بازی دوز</title>
    <style>
    body{
        background-image:url('img.jpg');
        background-position: center;
        background-size:cover; 
        align-items: center;
        display: flex;
        justify-content: center;
        min-height: 90vh;

    }
   
    .result{
        color: white;
        z-index: 2;
        position: absolute;
        top: -20px;
        font-size: 25px;
        background: transparent;
        backdrop-filter: blur(20px);
        padding: 5px;
        border-radius: 10px;
        border: 2px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 0 10px rgba(0 ,0,0,0.2);
    }

    form{
        align-items: center;
        border-radius: 10px;
        padding:30px 50px;
        background:transparent;
        border: 2px solid rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(20px);
        box-shadow: 0 0 10px rgba(0 ,0,0,0.2);
        margin-bottom: -15px;
        
    }
    #box{
        background-color: #474F7A;
        border: 3px solid #81689D;
        width: 100px;
        height: 100px;
        font-size: 40px;
        text-align: center;
        border-radius: 58% 42% 42% 58%/ 45% 51% 49% 55%;
        margin: 5px;
        box-shadow: 0 0 10px rgba(0 ,0,0,0.2);
        transition: 0.2s ease 0.3s;
        outline: none;
        color: #FFD0EC;
    }
    #box:hover {
        border-radius: 38% 62% 41% 59%/ 61% 43% 57% 39%;
    }
    #go{
        width: 150px;
        height :50px;
        background-color: #6E4AB3BD;
        font-size: 20px;
        border-radius: 50px;
        margin-top: 10%;
        width: 100%;
    }
    #go:active{
        background-color: #5227A4BD;
    }
    #again{
        height: 50px;
        background-color:#6E4AB3BD;  
        font-size: 20px;
        border-radius: 50px;
        margin-top: 10%;
        width: 100%;
       
    }
    #again:active{
        background-color: #5227A4BD;
    }
    </style>

</head>
<body background="#e6ebe7" text-align="center">
    <div>
        <form action="game.php" method="post">

            <?php 
            
            for($i=0 ; $i <= 8 ; $i++){
                echo "<input type='text' name='box".$i."' value= '".$box[$i]. "' id='box'>";

                if($i == 2 || $i == 5 || $i == 8){

                echo "</br>";
                }
            }

            if($Won=='noStatos'){
            echo "<input type='submit' name='submit' value= 'شروع بازی' id='go'>";
            }else{
            
            echo "<input type='button'  value= 'بازی دوباره' id='again' onclick='window.location.href=\"game.php\"'>";
            
            
            }
            
            ?>
            <input type='button'  value= 'بازگشت' id='again' onclick='window.location.href="index.php"'>

        </form>
    </div>
</body>
</html>