<html>
<head>
<title>Grocery management</title>
</head>
<style>
#color
{
  padding-top: 20px;
  background-color: lightgreen;
  width: 700px;
  height: 100%;
}
</style>
<body>
<center>
<div id="color">
<h1><i>Grocery management System</i></h1>
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
</div>
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
   if(!$conn)
   {
     die("connection failed");
   }
   else
   {
     echo("Connection suuccesfull!!");
   }

    if(isset($_POST['submit']))
    {
        $productid=$_POST['productid'];
        $productname=$_POST['productname'];
        $brand=$_POST['brand'];
        $category=$_POST['category'];
        $price=$_POST['price'];

        echo $productid;
        echo $productname;
        echo $brand;
        echo $category;
        echo $price;
        $sql="INSERT INTO data values( '$productid','$productname','$brand','$category','$price')";

        if(mysqli_query($conn,$sql))
        {
          echo(" Data Recorded");
        }
      //  $sql = "SELECT * FROM data";
        //$result = $conn->query($sql);


        /*if ($result->num_rows > 0)
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
    }*/
}

?>
