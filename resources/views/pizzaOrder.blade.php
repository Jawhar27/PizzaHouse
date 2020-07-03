<html>

<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
.label{
    color:red;
    margin-top:30px;
}
.label1{
    color:blue;
    margin-top:30px;
}
.form{
    margin-left:500px;
}
#h1{
    color:blue;
    
}
</style>

</head>
<body>

       <!-- Creating forms for ordering pizzas -->
<div class="form">
<h1 id="h1">Ordering Process Of Pizza</h1>
<form action="/" method="POST" enctype="multipart/form-data">
@csrf
<label class=label>your name</label><br>
<input type="text" name="name" id="name" ><br>
<label class=label>choose type of pizza</label><br>
<select name="type" id="type">
   <option value="pizza1">pizza1</option>
   <option value="pizza2">pizza2</option>
   <option value="pizza3">pizza3</option>
   <option value="pizza4">pizza5</option>
   <option value="pizza5">pizza5</option>
 </select>  <br>
 
 <label class=label>choose pizza base</label><br>
<select name="base" id="base">
   <option value="base1">base1</option>
   <option value="base2">base2</option>
   <option value="base3">base3</option>
   <option value="base4">base4</option>
   <option value="base5">base5</option>
 </select>  
 <fieldset>
  <label class="label1">Extra toppings</label><br>
  <input type="checkbox" name="toppings[]" value="topping1">Topping1<br>
  <input type="checkbox" name="toppings[]" value="topping2">Topping2<br>
  <input type="checkbox" name="toppings[]" value="topping3">Topping3<br>
  <input type="checkbox" name="toppings[]" value="topping4">Topping4<br>
  <input type="checkbox" name="toppings[]" value="topping5">Topping5<br>
 </fieldset><br><br>
 <input type="submit" value="Order Pizza">

</form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>