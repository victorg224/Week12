<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$_POST['name'];
    $address=$_POST['Address'];
    $zipCode=$_POST['Zip-Code'];
    $state=$_POST['State'];
    $totalWithTax=$_POST['totalWithTax'];

    echo "<h2>Thank you for your order, $name</h2>";
    echo "<h3>Your order will be shipped to $address, $zipCode, $state</h3>";
    echo"<h3>Total: $$totalWithTax</h3>";
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Week 11 Assignment</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script rel="text/javascript" src="myScript1.js"></script>
    </head>
<body>
   <div class="container">
    <h3>Shopping</h3>
    <form name = "myShopppingCart" method = "post" enctype ="application/x-www-form-urlencoded" action ="Week12.php">
        <div class= "row">
        <div class="col">
         <label>Name</label>
         <input type="text" id="name" name="name" required>
</div>
</div>

<div class="row">
    <div class="col">
        <label>Address</label>
        <input type="text" id="Address" name="Address" required> 
</div>
</div>

<div class="row">
    <div class="col">
        <label>Zip-Code</label>
        <input type="number" id="Zip-Code" name="Zip-Code" required> 
</div>
</div>

<div class="row">
    <div class="col">
        <label>State</label>
        <input type="text" id="State" name="State" required> 
</div> 
</div>

<div class="row">
    <div class="col">
    <h3>Products</h3>
        <label>Keyboard($29.95)</label>
        <input type="checkbox" id="Keyboard" name="Keyboard" value="$29.95">

        <label>Mouse($9.99)</label> 
        <input type="checkbox" id="Mouse" name="Mouse" value="$9.99">

        <label>Laptop-Case($19.99)</label>
        <input type="checkbox" id="Laptop-Case" name="Laptop-Case" value="$19.99">

        <label>Backpack($14.95)</label>
        <input type="checkbox" id="Backpack" name="Backpack" value="$14.95">
</div>
</div>

<div class="row">
    <div class="col">
    <h3>Sales Tax</h3>
    <button type="button" id="calculate-tax">Calculate</button>
    <label>total-cost</label>
    <input type="text" id="total-cost">
</div>
</div>

<div class="row">
    <div class="col">
    <button type="submit">submit</button>

<input type="hidden" id="hidden-total" name="totalWithTax">

</div>
</div>
</form>
</div>
<script>
document.getElementById("calculate-tax").addEventListener("click", function() {
    let total = 0; 

    if (document.getElementById("Keyboard").checked) {
        total += 29.95; 
    }
    if (document.getElementById("Mouse").checked) {
        total += 9.99; 
    }
    if (document.getElementById("Laptop-Case").checked) {
        total += 19.99; 
    }
    if (document.getElementById("Backpack").checked) {
        total += 14.95; 
    }

    const salesTax = total * 0.075;
    const totalWithTax = total + salesTax;

    document.getElementById("total-cost").value = totalWithTax.toFixed(2);
    document.getElementById("hidden-total").value=totalWithTax.toFixed(2);
    
});
</script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/js/bootstrap.min.js"></script>
   
</body>
</html>





        

