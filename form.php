<?php
    $conn=mysqli_connect("localhost","root","","college1")
?>
<html>
<head>
    <title>Document</title>
</head>

<body>
    <form>
        Rollno <input type="text" name="rollno"><br><br>
        Name <input type="text" name="name"><br><br>
        Marks <input type="text" name="marks"><br><br>
        Grade <input type="text" name="grade"><br><br>
        <input type="submit" value="submit" name="submit">
        <input type="submit" value="update" name="update">
        <input type="submit" value="delete" name="delete">
        <input type="submit" value="search" name="search">
    </form>
</body>

</html>
<?php
    if(isset($_REQUEST["submit"]))
    {
        $rollno=$_REQUEST["rollno"];
        $name=$_REQUEST["name"];
        $marks=$_REQUEST["marks"];
        $grade=$_REQUEST["grade"];
        $query="insert into student1 values( '$rollno','$name','$marks','$grade')";
        $run=mysqli_query($conn,$query);
        if($run){
            echo"Successfully Inserted";
        }

        $sql = "SELECT rollno, name, marks, grades FROM student1";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>rollno</th><th>Name</th><th>marks</th></tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["rollno"]."</td><td>".$row["name"]."</td><td>".$row["marks"]."</td></tr>";
            }

            echo "</table>";
        } else {
            echo "0 results";
        }
        else{
            echo"failed";
        }
    }
?>
