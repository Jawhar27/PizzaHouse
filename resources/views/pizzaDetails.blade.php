<html>
<head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      
        <style>
        .content{
            width:100%;
        }
        .details{
            text-align:center;
            
        }
        #detail{
            text-align:center;
            color:blue;
            margin-bottom:30px;
            border:2px solid red ;
        }
       
        .link{
           
            font-size:22px;
            color:green;
            margin-left:730px;
            
        }
    
        </style>
        </head>
        <body>
        <div class="content">
        <h1 id="detail"> Pizza Details</h1>
        @foreach($pizzas as $pizza)
        <div class="details">
       
        <h4 >{{$pizza->id}}:-{{$pizza->name}}--{{$pizza->type}}--{{$pizza->base}}</h4>
        <a href="/pizzaDetails/{{$pizza->id}}">more details</a><br>
       
         </div>
         @endforeach
         <br>
         <br>
         <a href="/" class="link"> Back to home</a>
        
        
         
          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



    </body>
</html>
