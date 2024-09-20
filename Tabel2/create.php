<html>
<head class="bg-[#09152b]">
    <title>Detail Product</title>
</head>

<body>
    <a href="..\index.php">Back</a>
    <br/><br/>

    <form action="create.php" method="post" name="form1">
        <table class="" width="25%" border="0">
            <tr> 
                <td>ID</td>
                <td><input type="number" name="ID"></td>
            </tr>
            <tr> 
                <td>Brand</td>
                <td><input type="text" name="Brand"></td>
            </tr>
            <tr> 
                <td>Tipe</td>
                <td><input type="text" name="Tipe"></td>
            </tr>
            <tr> 
                <td>Stock</td>
                <td><input type="text" name="Stock"></td>
            </tr>
            <tr> 
                <td>Class</td>
                <td><input type="text" name="Class"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php

    // Pengecekan jika form di submit, masukkan form data ke users table.
    if(isset($_POST['Submit'])) {
        $id = $_POST['ID'];
        $brand = $_POST['Brand'];
        $tipe = $_POST['Tipe'];
        $stock = $_POST['Stock'];
        $class = $_POST['Class'];
        
        // include database connection file
        include_once("..\connect.php");
                
        // Insert user data into table
        $result2 = mysqli_query($mysqli, "INSERT INTO detail(ID, Brand, Tipe, Stock, Class) VALUES('$id', '$brand', '$tipe', '$stock', '$class')");
        
        // Show message when user added
        echo "Detail Sudah Tambahkan. <a href='..\index.php'>Kembali Ke Tabel</a>";
    }
    ?>
</body>
</html>