<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view student</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Riston Academy</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="add student.php">Add Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view student.php">View Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add parents.php">Add Parent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view parents.php">View Parent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add class.php">Add Class</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view class.php">View Class</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add teacher.php">Add Teacher</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view teacher.php">View Teacher</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <table id="tbl">

                <tr>
                    <th width="150px">Student ID<br>
                        <hr>
                    </th>
                    <th width="150px">Student Name<br>
                        <hr>
                    </th>
                    <th width="180px">Blood-group<br>
                        <hr>
                    </th>
                    <th width="180px">Gender<br>
                        <hr>
                    </th>
                    <th width="115px">Parents id<br>
                        <hr>
                    </th>
                    <th width="160px">Class id<br>
                        <hr>
                    </th>
                </tr>

                <?php
                $link = mysqli_connect("localhost", "root", "", "rishav");

                $sql = mysqli_query($link, "SELECT  Sid, Sname, Sbloodgroup, Sgender, Pid, Cid FROM students");
                while ($row = $sql->fetch_assoc()) {
                    echo "
    <tr> 

        <td>{$row['Sid']}</td>
        <td>{$row['Sname']}</td>
        <td>{$row['Sbloodgroup']}</td>
        <td>{$row['Sgender']}</td>
        <td>{$row['Pid']}</td>
        <td>{$row['Cid']}</td>

      </tr>";
                }
                ?>
            </table>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2023 Riston Academy. All rights reserved.</p>
        </div>
    </footer>
    <!-- Bootstrap JS -->