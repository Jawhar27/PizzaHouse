<html>
<head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      
        <style>
        #h1{
            text-align:center;
            color:blue;
            border:2px solid red;
        }
        .show{
            margin-left:500px;
        }
        .link{
            margin-top:30px;

        }
       .toppings ul {
            text-decoration:none;
        }
        .but{
            margin-top:20px;
        }
       </style>
    <body>
    <div>
    <h1 id="h1"> Pizza List</h1>
    <div class="show">
    <h3>Order for-{{$pizza->name}}</h3>
    <p class="para">{{$pizza->base}}<br>
       {{$pizza->type}}<br>
       <p class="toppings">Extra Toppings</p>
          <ul>
             @foreach($pizza->toppings as $toppings)
             <li>{{ $toppings }} </li>
             @endforeach
           </ul>
        
       <a href="/pizzaDetails" class="link" >Back to Pizza Details</a>
       <form action="/pizzaDetails/{{$pizza->id}}" method="POST">
         @csrf
         @method('DELETE')
         <button class="but">Complete order</button>
         </form>
   </div>
    
          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



    </body>
</html>
