<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VIT(Vidhyathi Institute of Technology Class)</title>
    <!-- FavIcon -->
    <link rel="icon" href="./IPimages/vitplain.jpeg" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <style>
        body {
            background: #D071f9;
        }

        table {
            background-color: white;
        }

        .update,
        .delete {
            background-color: green;
            color: white;
            border: 0;
            outline: none;
            border-radius: 5px;
            height: 23px;
            width: 80px;
            font-weight: bold;
            cursor: pointer;
        }

        .delete {
            background-color: red;

        }
    </style>
</head>

<body class="mx-2">
    <?php
    include("connection.php");

    $query = "SELECT * FROM FORM";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);


    // echo $total;

    if ($total != 0) {
    ?>
        <div class="p-3">
            <h2 class="text-center"><mark> Displaying all records </mark></h2>

            <table class="rounded-2" cellspacing="7" width="100%">
                <tr>
                    <th width="5%">ID</th>
                    <th width="5%">Image</th>
                    <th width="8%">First Name</th>
                    <th width="8%">Last Name</th>
                    <th width="10%">Gender</th>
                    <th width="20%">Email</th>
                    <th width="10%">Phone</th>
                    <th width="10%">Caste</th>
                    <th width="10%">Languages</th>
                    <th width="25%">Address</th>
                    <th width="15%">Operations</th>
                </tr>

            <?php

            while ($result = mysqli_fetch_assoc($data)) {
                echo "
                    <tr>
                        <td>
                            " . $result["id"] . "
                        </td>
                        <td>
                            <img src= '" . $result["std_image"] . "' height='100px' width='100px'>
                        </td>
                        <td>
                            " . $result["fname"] . "
                        </td>
                        <td>
                            " . $result["lname"] . "
                        </td>
                        <td>
                            " . $result["gender"] . "
                        </td>
                        <td>
                            " . $result["email"] . "
                        </td>
                        <td>
                            " . $result["phone"] . "
                        </td>
                        <td>
                            " . $result["caste"] . "
                        </td>
                        <td>
                            " . $result["language"] . "
                        </td>
                        <td>
                            " . $result["address"] . "
                        </td>

                        <td>
                            <a href='update_design.php?id=$result[id]'>
                                <input type='submit' value='Update' class='update'>
                            </a>

                            <a href='delete.php?id=$result[id]'>
                                <input type='submit' value='Delete' class='delete' onclick = 'checkdelete()'>
                            </a>
                        </td> 
                    </tr>
                    ";
            }
        } else {
            echo "No records found";
        }
            ?>
            </table>

            <script>
                function checkdelete() {
                    return confirm('Are you sure you want to Delete this record ?');
                }
            </script>
</body>

</html>