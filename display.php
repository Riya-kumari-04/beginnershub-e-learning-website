<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
    background: #edfaf1;
        }

        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color:green; 
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
    
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connection.php';
            $selectquery = "select * from signup";
            $query = mysqli_query($con,$selectquery);
            while($res = mysqli_fetch_array($query)){
                 ?>
                <tr>
                <td><?php echo $res['id']; ?></td>
                <td><?php echo $res['username']; ?></td>
                <td><span class="email-style"><?php echo $res['email']; ?></span></td>
                <td><?php echo $res['password']; ?></td>
                <td>
                    <form action="update.php" method="post" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $res['id']; ?>">
                        <button type="submit" name="update"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                    </form>
                    <form action="delete.php" method="post" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $res['id']; ?>">
                        <button type="submit" name="delete"><i class="fa-solid fa-trash"></i> Delete</button>
                    </form>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>
