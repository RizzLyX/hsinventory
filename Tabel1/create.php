<html>
<head>
    <title>Add Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex bg-[#09152b] text-white">
    <form class="flex justify-center ml-[560px]" action="create.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td class="text-[20px]">Add Product</td>
            </tr>
            <tr> 
                <td>ID</td>
                <td><input class="text-black" type="text" name="ID"></td>
            </tr>
            <tr> 
                <td>Nama Produk</td>
                <td><input class="text-black" type="text" name="NamaProduk"></td>
            </tr>
            <tr> 
                <td>Multiplatform</td>
                <td><input class="text-black" type="text" name="Multiplatform"></td>
            </tr>
            <tr> 
                <td>Connectivity</td>
                <td><input class="text-black" type="text" name="Connectivity"></td>
            </tr>
            <tr> 
                <td>Cable Length</td>
                <td><input class="text-black" type="text" name="CableLength"></td>
            </tr>
            <tr> 
                <td>Driver</td>
                <td><input class="text-black" type="text" name="Driver"></td>
            </tr>
            <tr> 
                <td>Price</td>
                <td><input class="text-black" type="text" name="Price"></td>
            </tr>
            <tr> 
                <td class="h-[40px] w-[60px] bg-[#035cc2] rounded-md"><a class="pl-[32px]" href="..\index.php">Back</a></td>
                <td><input class="h-[40px] w-[150px] bg-[#035cc2] rounded-md ml-[30px]" type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php

    // Pengecekan jika form di submit, masukkan form data ke users table.
    if(isset($_POST['Submit'])) {
        $id = $_POST['ID'];
        $namaproduk = $_POST['NamaProduk'];
        $multiplatform = $_POST['Multiplatform'];
        $connectivity = $_POST['Connectivity'];
        $cable = $_POST['CableLength'];
        $driver = $_POST['Driver'];
        $price = $_POST['Price'];

        
        // include database connection file
        include_once("..\connect.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO hsgaming(ID,NamaProduk,Multiplatform,Connectivity,CableLength,Driver,Price) VALUES('$id', '$namaproduk', '$multiplatform', '$connectivity', '$cable', '$driver', '$price')");
        
        // Show message when user added
        echo "Produk Sudah Tambahkan.";
        echo "<a href='..\index.php'>Kembali Ke Tabel</a>";
    }
    ?>
</body>
</html>