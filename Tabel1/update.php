<?php
// include database connection file
include_once("..\connect.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $id = $_POST['ID'];
    
    $namaproduk=$_POST['NamaProduk'];
    $multiplatform=$_POST['Multiplatform'];
    $connectivity=$_POST['Connectivity'];
    $cablelength=$_POST['CableLength'];
    $driver=$_POST['Driver'];
    $price=$_POST['Price'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE hsgaming SET NamaProduk='$namaproduk',Multiplatform='$multiplatform',Connectivity='$connectivity',CableLength='$cablelength',Driver='$driver',Price='$price' WHERE ID=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: ..\index.php");
}

// Display selected user data based on id
// Getting id from url
$id = $_GET['ID'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM hsgaming WHERE ID=$id");

while($user_data = mysqli_fetch_array($result))
{
    $namaproduk = $user_data['NamaProduk'];
    $multiplatform = $user_data['Multiplatform'];
    $connectivity = $user_data['Connectivity'];
    $cablelength = $user_data['CableLength'];
    $driver = $user_data['Driver'];
    $price = $user_data['Price'];
}
?>

<html>
<head>    
    <title>Edit Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex bg-[#09152b]">
    <form class="flex justify-center ml-[560px]" name="update_user" method="post" action="update.php">
        <table class="text-white" border="1">
            <tr> 
                <td class="text-[20px]">Update Product</td>
            </tr>

            <tr>
                <td>ID</td>
                <td><input class="text-black" type="number" name="ID" value=<?php echo $_GET['ID'];?>></td>
            </tr>
            <tr> 
                <td>Nama Produk</td>
                <td><input class="text-black" type="text" name="NamaProduk" value=<?php echo $namaproduk;?>></td>
            </tr>
            <tr> 
                <td>Multiplatform</td>
                <td><input class="text-black" type="text" name="Multiplatform" value=<?php echo $multiplatform;?>></td>
            </tr>
            <tr> 
                <td>Connectivity</td>
                <td><input class="text-black" type="text" name="Connectivity" value=<?php echo $connectivity;?>></td>
            </tr>
            <tr> 
                <td>Cable Length</td>
                <td><input class="text-black" type="text" name="CableLength" value=<?php echo $cablelength;?>></td>
            </tr>
            <tr> 
                <td>Driver</td>
                <td><input class="text-black" type="text" name="Driver" value=<?php echo $driver;?>></td>
            </tr>
            <tr> 
                <td>Price</td>
                <td><input class="text-black" type="number" name="Price" value=<?php echo $price;?>></td>
            </tr>
            <tr>
                <td class="h-[30px] w-[120px] bg-[#035cc2] rounded-md pl-[13px]"><a class="pl-[32px]" href="..\index.php">Back</a></td>
                <td class="pl-[40px]"><input class="h-[40px] w-[120px] bg-[#035cc2] rounded-md" type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>