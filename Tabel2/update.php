<?php
// include database connection file
include_once("..\Connect.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $id = $_POST['ID'];
    
    $brand=$_POST['Brand'];
    $tipe=$_POST['Tipe'];
    $stock=$_POST['Stock'];
    $class=$_POST['Class'];
        
    // update user data
    $result2 = mysqli_query($mysqli, "UPDATE detail SET ID='$id',Brand='$brand',Tipe='$tipe',Stock='$stock',Class='$class' WHERE ID=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: ..\index.php");
}

// Display selected user data based on id
// Getting id from url
$id = $_GET['ID'];

// Fetech user data based on id
$result2 = mysqli_query($mysqli, "SELECT * FROM detail WHERE ID=$id");

while($user_data2 = mysqli_fetch_array($result2))
{
    $id = $user_data2['ID'];
    $brand = $user_data2['Brand'];
    $tipe = $user_data2['Tipe'];
    $stock = $user_data2['Stock'];
    $class = $user_data2['Class'];
}
?>

<html>
<head>    
    <title>Edit Detail Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex bg-[#09152b] text-white">
    
    <form class="flex justify-center ml-[560px]" name="update_user" method="post" action="update.php">
        <table border="1">
            <tr>
                <td>ID</td>
                <td><input type="number" name="ID" value=<?php echo $_GET['ID'];?>></td>
            </tr>
            <tr> 
                <td>Brand</td>
                <td><input type="text" name="Brand" value=<?php echo $brand;?>></td>
            </tr>
            <tr> 
                <td>Tipe</td>
                <td><input type="text" name="Tipe" value=<?php echo $tipe;?>></td>
            </tr>
            <tr> 
                <td>Stock</td>
                <td><input type="text" name="Stock" value=<?php echo $stock;?>></td>
            </tr>
            <tr> 
                <td>Class</td>
                <td><input type="text" name="Class" value=<?php echo $class;?>></td>
            </tr>
            <tr>
                <td class="h-[40px] w-[60px] bg-[#035cc2] rounded-md"><a class="pl-[32px]" href="..\index.php">Back</a></td>
                <td><input class="h-[40px] w-[150px] bg-[#035cc2] rounded-md ml-[30px]" type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>