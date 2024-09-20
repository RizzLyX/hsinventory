<?php
// Create database connection using config file
include_once("connect.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM hsgaming ORDER BY ID ASC");
$result2 = mysqli_query($mysqli, "SELECT * FROM detail ORDER BY ID ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUGE AUDIO</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#09152b] h-[65px]">
    <header>
        <nav class="flex items-center px-[40px] justify-between">
            <div class="flex mt-[20px]">
                <h1 class="text-[#ecf9ff] ml-[60px] text-[35px]">HUDIO</h1>
            </div>
            <div>
                <ul class="flex pt-[25px]">
                    <li class="pr-[45px] text-[#ECF9FF] text-[18px] hover:text-black"><a href="#tabel">List Product</a></li>
                    <li class="pr-[70px] text-[#ECF9FF] text-[18px] hover:text-black"><a href="#tabel2">Detail Product</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="flex justify-between text-white pt-[40px] pl-[90px]">
            <div>
                <h1 class="text-[110px] pt-[110px]">HUDIO</h1>
                <p class="text-[24px] pt-[150px]">HUDIO is one of the biggest suppliers of <br>audio peripherals in Indonesia.</p>
            </div>
            <div class="w-[51%]">
                <img src="./Headset Only.png" alt="">
            </div>
        </section>
        
        <section id='tabel'>
        <div class="text-white mt-[800px]">
            <h1 class="mb-[20px] ml-[556px] text-[45px]">List Headset 2022</h1>
            <a class="pl-[30px] hover:text-black" href="Tabel1\create.php"><button class="h-[45px] w-[130px] rounded-full bg-[#035cc2]">Add Product</button></a><br/><br/> 
            <table class="w-full border-separate" width='75%'>
                <thead class="bg-[#035cc2] border-dashed border-[#00b0fc] h-[40px]">
                    <tr align="left">
                        <th>ID</th> <th>Nama Produk</th> <th>Multiplatform</th> <th>Connectivity</th> <th>CableLength</th> <th>Driver</th> <th>Price</th> <th>Update</th>
                    </tr>
                </thead>
                <?php  
                while($user_data = mysqli_fetch_array($result)) {         
                    echo "<tr>";
                    echo "<td>".$user_data['ID']."</td>";
                    echo "<td>".$user_data['NamaProduk']."</td>";
                    echo "<td>".$user_data['Multiplatform']."</td>";
                    echo "<td>".$user_data['Connectivity']."</td>"; 
                    echo "<td>".$user_data['CableLength']."</td>";
                    echo "<td>".$user_data['Driver']."</td>";
                    echo "<td>".$user_data['Price']."</td>";   
                    echo "<td><a href='Tabel1\update.php?ID=$user_data[ID]'>Update</a> | <a href='Tabel1\delete.php?ID=$user_data[ID]'>Delete</a></td></tr>";        
                }
                ?>
            </table>

            <h1 id="tabel2" class="relative mb-[20px] ml-[580px] mt-[100px] text-[45px]">Detail Product</h1>
            <a class="pl-[30px] hover:text-black" href="Tabel2\create.php"><button class="h-[45px] w-[130px] rounded-full bg-[#035cc2]">Add Detail</button></a><br/><br/> 
            <table class="w-full border-separate" width='75%'>
                <thead class="bg-[#035cc2] border-dashed border-[#00b0fc] h-[40px]">
                    <tr align="left">
                        <th>ID</th> <th>Brand</th> <th>Tipe</th> <th>Stock</th> <th>Class</th>  <th>Update</th>
                    </tr>
                </thead>
                <?php  
                while($user_data2 = mysqli_fetch_array($result2)) {         
                    echo "<tr>";
                    echo "<td>".$user_data2['ID']."</td>";
                    echo "<td>".$user_data2['Brand']."</td>";
                    echo "<td>".$user_data2['Tipe']."</td>";
                    echo "<td>".$user_data2['Stock']."</td>"; 
                    echo "<td>".$user_data2['Class']."</td>";  
                    echo "<td><a href='Tabel2\update.php?ID=$user_data2[ID]'>Update</a> | <a href='Tabel2\delete.php?ID=$user_data2[ID]'>Delete</a></td></tr>";        
                }
                ?>
            </table>
        </div>
        </section>
    </main>
</body>
</html>