<?php
require_once 'admin/Database.php';
    if (!defined('TODAY')) {
        define('TODAY', (new DateTime('today'))->format('m/d/Y'));
    }

    if (!defined('TOMMOROW')) {
        define('TOMMOROW', (new DateTime('tomorrow'))->format('m/d/Y'));
    }

 ?>
<!Doctype html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <title>Football Prediction Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/nav.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    <style>
        td {
            text-align: center
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="background: #ff5e4d;">
            <div class="col-12">
                <div class="text-center">
                    <img src="images/bettip.png" alt="Logo here">
                </div>
            </div>
        </div>
    </div>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">1X2Bettips</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">FREE TIPS
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">VIP TIPS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">CONTACT US</a>
                        </li>
                    </ul>
                    <form class="form-inline mt-2 mt-md-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="col-12">
                    <div style="margin: 10px">
                        <h2 style="text-decoration:underline;font-size:18px"> TODAY
                            <?php echo TODAY ?>
                         </h2>
                    </div>
                    <div class="table-responsive">
                        <table id="table1" class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>TIME</th>
                                    <th>LEAGUE</th>
                                    <th>MATCHES</th>
                                    <th>TIP 1</th>
                                    <th>TIP%</th>
                                    <th>TIP 2</th>
                                    <th>TIP%</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    $db = Database::getInstance();
                                    $query = 'SELECT * FROM games WHERE matchdate = :date ORDER BY id DESC';
                                    // echo $query;
                                    $db->query($query);
                                    $db->bind(':date', date((new DateTime('today'))->format('Y-m-d')));
                                    $stmt = $db->execute();
                                    if ($stmt->rowCount() > 0) {
                                        while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {?>
                                            <tr>
                                                <td><?php echo $data->matchtime ?></td>
                                                <td><?php echo $data->league ?></td>
                                                <td><?php echo $data->matches ?></td>
                                                <td><?php echo $data->tip1 ?></td>
                                                <td><?php echo $data->firstpercentage ?> </td>
                                                <td><?php echo $data->tip2 ?></td>
                                                <td><?php echo $data->secondpercentage ?> </td>
                                            </tr>

                                        <?php
                                        // echo (new DateTime($data->datecreated))->add(new DateInterval("P1D"))->format('Y-m-d H:i:s');

                                        }
                                    }?>
                        </table>
                    </div>
                    <br />
                    <br />
                    <div style="margin-top: 10px">
                        <h2 style="text-decoration:underline;font-size:18px"> TOMORROW <?php echo TOMMOROW; ?> </h2>
                    </div>
                    <div class="table-responsive">
                        <table id="table2" class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>TIME</th>
                                    <th>LEAGUE</th>
                                    <th>MATCHES</th>
                                    <th>TIP 1</th>
                                    <th>TIP%</th>
                                    <th>TIP 2</th>
                                    <th>TIP%</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $db = Database::getInstance();
                                    $query = 'SELECT * FROM games WHERE matchdate = :dat ORDER BY id DESC';
                                    $db->query($query);
                                    $db->bind(':dat', date((new DateTime('tomorrow'))->format('Y-m-d')));
                                    $stmt = $db->execute();
                                    if ($stmt->rowCount() > 0) {
                                        while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {?>
                                            <tr>
                                                <td><?php echo $data->matchtime ?></td>
                                                <td><?php echo $data->league ?></td>
                                                <td><?php echo $data->matches ?></td>
                                                <td><?php echo $data->tip1 ?></td>
                                                <td><?php echo $data->firstpercentage ?> </td>
                                                <td><?php echo $data->tip2 ?></td>
                                                <td><?php echo $data->secondpercentage ?> </td>
                                            </tr>

                                        <?php
                                        }
                                    }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark" style="color: white">
        <div class="container-fluid">
            <div>
                <p style="text-align:justify; font-size:12px;"> </p>
            </div>
            <div class="copyright" style="text-align:center;">
                <a href="admin/login.php"> Login </a>
                <p>copyright&copy;1X2Bettips.com</p>
                <p>All Rights Reserved 1X2Bettips.com 2017 - 2018 </p>
            </div>

        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#table1').DataTable({
                // "order": [[0, 'desc']]
            });
            $('#table2').DataTable({
                "order": [[1, 'desc']]
            });
        });
    </script>
</body>

</html>
