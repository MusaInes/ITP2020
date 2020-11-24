<?php
require "connection/connection.php";
$query = "SELECT * FROM countries;";
$result = mysqli_query($connection, $query);
?>

<select name="countryList" onchange="ucitajNovuTabelu(this)">
            <option value="0">---Select country---</option>
            <?php
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?= $row['id'] ?>">
                    <?php
                        echo $row['country_name'];
                    ?>
                </option>
            <?php
            }
?>
        </select><br><br>
