<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>حالت بازی رو انتخاب کنید</title>
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
<body>
    <div>
    <input type="button" value="بازی با ربات" id="again" onclick='window.location.href="game.php"'>

    <input type="button" value="بازی دونفره" id="again" onclick='window.location.href="game_friends.php"'>

    </div>
</body>
</html>