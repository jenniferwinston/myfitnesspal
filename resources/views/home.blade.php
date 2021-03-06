<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Fitness Tracker</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

         <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
          <link rel="stylesheet" href="{{ URL::asset('css/formstyle.css') }}">
         <style>
                body { 
                    background-image:url('{{ asset('images/bkgd.jpg') }}'); 
                    background-position: center center;
                    background-repeat: no-repeat;
                    background-attachment:fixed;
                    background-size: cover;
                }
         </style>
    </head>
    <body>
     <div class="links">
        <a class="hvr-grow" href="{{ url('/add') }}">Add A Meal</a>
        <a class="hvr-grow" href="#">Home</a>                  
    </div>
                <br>
                <br>
    <div class="titled"> My Fitness Tracker</div>

    <div class="homebkg">
        <div class="recentTitle">Your Recent Meals</div>
        <hr><br>
        <div class="recentContent">
            Five Guys Cheeseburger
        </div>    

    </div>

                
    



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        
    </body>
</html>
