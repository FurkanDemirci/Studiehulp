<?php
session_start();

require 'includes/adminAccounts.inc.php';

if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['type'] == 0) {
        header("Location: ../../studiehulp");
    }
} else {
    header("Location: ../../studiehulp");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Studiekeuzebegeleiding</title>
    <link rel="shortcut icon" href="img/titleIcon.ico"/>

    <!-- stylesheets and meta info -->
    <?php require 'partials/head.php'; ?>
    <?php require 'partials/stylesheets.php'; ?>

    <!-- script tags -->
    <?php require 'partials/javascript.php'; ?>

    <style>
        nav, header, main, footer {
            padding-left: 300px;
        }

        @media only screen and (max-width: 992px) {
            nav, header, main, footer {
                padding-left: 0;
            }
        }
    </style>
</head>
<body class="teal">

<!-- Sidebar -->
<?php require 'partials/sidebar.admin.php'; ?>

<!-- Content -->
<main>
    <div class="container">
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <div class="row center">
                    <br>
                    <?php
                    echo '<h4 class="header center white-text">';
                    echo 'Welkom ';
                    echo '<b>';
                    if (isset($_SESSION['user'])) {
                        echo $_SESSION['user']['firstname'];
                    } else {
                        echo "Admin";
                    }
                    echo '</b>';
                    echo '</h4>';
                    ?>
                    <h6 class="header center white-text">Zoek hier naar student via mail, bekijk daarna zijn
                        preferenties en
                        verstuur email naar
                        student.</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row center">
            <div class="col s12 m3"></div>
            <div class="col s12 m6">
                <div class="card-panel red darken-4">
          <span class="white-text">Aantal student accounts:
              <?php
              include 'includes/dbcon.inc.php';

              if ($resultx = mysqli_query($conn, "SELECT id_users FROM users")) {

                  /* determine number of rows result set */
                  $row_cnt = mysqli_num_rows($resultx);

                  printf("<h6 class='black-text darken-4' style='font-weight: bold; font-size: 20px;'>$row_cnt</h6>");

                  /* close result set */
                  mysqli_free_result($resultx);
              }
              ?>
          </span>
                </div>
            </div>
            <div class="col s12 m3"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="row">
                    <div class="input-field">
                        <input id="search" type="search" onkeyup="searchFunction()" placeholder="Zoek naar namen.."
                               required>
                        <label for="search"><i class="material-icons white-text">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row col s12 m6">
            <table id="myTable" class="white z-depth-2 bordered highlight centered">
                <thead>
                <tr>
                    <th>Volledige naam</th>
                    <th>Email</th>
                </tr>
                </thead>

                <tbody>
                <?php
                $x = 1;
                foreach ($result as $key => $value) {
                    echo "<tr>";
                    echo "<td>" . $value['firstname'];
                    echo " " . $value['lastname'] . "</td>";
                    echo "<td>" . $value['email'] . "</td>";
                    echo "
                    
                    <form action='includes/accounts.inc.php' method='GET'>
                    <input value='" . $value['fk_preference'] . "' name='id' style='display:none'/>
                    <td><button type='submit' class='waves-effect waves-circle waves-light btn-floating teal darken-4 modal-trigger'><i class='material-icons'>toc</i></button></td>
                    </form>
                    ";
                    echo "</tr>";
                    $x++;
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <br>
</main>

<!-- Footer -->
<?php require 'partials/footer.php'; ?>

</body>
</html>