<?php
session_start();
?>

<?php
include 'includes/accounts.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Studiehulp</title>
    <link rel="shortcut icon" href="img/titleIcon.ico"/>

    <?php require 'partials/head.php'; ?>
    <?php require 'partials/stylesheets.php'; ?>
</head>
<body>

<!-- Sidebar -->
<?php require 'partials/sidebar.php'; ?>

<!-- Content -->
<div class="container">
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <div class="row center">
                <br>
                <h4 class="header center black-text">Begeleider</h4>
                <br>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="row">
                    <div class="input-field">
                        <input id="search" type="search" onkeyup="searchFunction()" placeholder="Zoek naar namen.."
                               required>
                        <label for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                </div>
            </div>
        </div>

        <table id="myTable" class="bordered highlight centered">
            <thead>
            <tr>
                <th>Volledige naam</th>
                <th>Email</th>
                <th>Open</th>
            </tr>
            </thead>

            <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $email = $row['email'];


                    echo "<tr>";
                    echo "<td>".$row['firstname'];
                    echo " ".$row['lastname']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo '<td><a class="waves-effect waves-circle waves-light btn-floating teal darken-1 modal-trigger"
                       href="#modal"><i class="material-icons">toc</i></a></td>';
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }
            ?>
            </tbody>
        </table>
    </div>
    <br><br>

    <!-- Modal Structure -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <div class="row center">
                <h4><?php
                    echo "Voornaam";
                    echo " Achternaam";
                    ?></h4>
                <p>Gegevens</p>
            </div>
            <div class="row">
                <div class="col s6">
                    <blockquote>
                        <h4>Email:</h4> <?php
                        echo "email";
                        ?>
                    </blockquote>
                </div>
                <div class="col s6">

                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="fixed-action-btn horizontal">
                <a class="btn-floating btn-large red">
                    <i class="large material-icons">mode_edit</i>
                </a>
                <ul>
                    <li><a class="btn-floating green"><i class="material-icons">library_books</i></a></li>
                    <li><a class="btn-floating blue"><i class="material-icons">email</i></a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
<br><br>

<!-- JavaScript en Jquery -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
    function searchFunction() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    $(document).ready(function () {
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
    });

</script>

<!-- Footer -->
<?php require 'partials/footer.php'; ?>

<!-- script tags -->
<?php require 'partials/javascript.php'; ?>

</body>
</html>