<html>
<head>
<title>Grocery management</title>
</head>
<style>

</style>
<body>
<center>
<h1>Grocery management System</h1>
<form onsubmit="validate()" method="POST" >
<label for productid>Product Id: </label>
<input type="text" id="productid" name="productid"><br><br>
<label for productname>Product Name: </label>
<input type="text" id="productname" name="productname"><br><br>
<label for brand>Brand: </label>
<input type="text" id="brand" name="brand"><br><br>
<label for category>Category: </label>
<input type="text" id="category" name="category"><br><br>
<label for price>Price: </label>
<input type="number" id="price" name="price"><br><br>

<input type="submit" value="submit">
</center>
</form>

<script>
function validate()
{
 var productid=document.getElementById("productid").value;
 var productname=document.getElementById("productname").value;
 var brand=document.getElementById("brand").value;
 var category=document.getElementById("category").value;
 var price=document.getElementById("price").value;

 if(productid==="")
 {
   alert("Please enter the product id !!!");
   return false;
 }
 if(productname==="")
 {
   alert("Please enter the product name !!!");
   return false;
 }
 if(category==="")
 {
   alert("Please enter the category !!!");
   return false;
 }
 if(brand==="")
 {
   alert("Please enter the product brand!!!");
   return false;
 }
 if(price==="")
 {
   alert("Please enter the product price !!!");
   return false;
 }
   alert("Form submitted successfully!!");
   return true;
}
</script>
</body>
</html>
<?php
  $conn=mysqli_connect("localhost","root","","exam");

    if(isset($_REQUEST["submit"]))
    {
        $productid=$_REQUEST["productid"];
        $productname=$_REQUEST["productname"];
        $brand=$_REQUEST['brand'];
        $category=$_Request['category'];
        $price=$_Request['price'];

        $query="INSERT INTO data values( '$productid','$productname','$brand','$category','$price')";
        $run=mysqli_query($conn,$query);
        if($run)
        {
            echo"Successfully Inserted";
        }

        $sql = "SELECT * FROM data";
        $result = $conn->query($sql);


        if ($result->num_rows > 0)
        {
            echo "<table>";
            echo "<tr><th>product id</th><th>productname</th><th>brand</th><th>category</th><th>price</th></tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["productid"]."</td><td>".$row["productname"]."</td><td>".$row["brand"]."</td><td>".$row["category"]."</td><td>".$row["price"]."</td></tr>";
            }

            echo "</table>";
        }
        else {
            echo "0 results";
        }
        else
        {
            echo"failed";
        }
    }


?>
