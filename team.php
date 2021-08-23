<html lang="en">
<head>

    <?php 
        include'header.php';
        include'footer.php';
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>team</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">  
    </head>
<body>
    

    <div class="maindiv">
        
        
</div>

  
  
</body>
</html>

<style>
    .maindiv{
        width:50%;
        height: 200px;
        position:absolute;
        left:60%;
        top:20%;
        transform: translate(-80%,-50%);
        background-image: url(images/1.jpg);
        background-image: url(images/2.jpg);
        background-image: url(images/3.jpg);
        background-size:100% 100%;



        animation-duration:9s;
        animation-name:slidein;
        animation-direction:reverse;
        animation-iteration-count: infinite;

    }
    @keyframes slidein {
       0%{background-image: url(images/1.jpg);}
       35%{background-image: url(images/2.jpg);}
       75%{background-image: url(images/3.jpg);}
}

.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color:blueviolet;
  color: white;
  text-align: center;
}



</style>