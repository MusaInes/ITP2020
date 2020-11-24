<?php
if(isset($_REQUEST['country_id'])){

    require "connection/connection.php";
    //$query = "SELECT * FROM patients JOIN countries ON patients.country_id = countries.id WHERE patients.id >= (SELECT (MAX(id)-4) FROM patients) AND patients.id <=(SELECT MAX(id) FROM patients)";
    $query = "SELECT * FROM patients JOIN countries ON patients.country_id = countries.id ORDER BY patients.id DESC LIMIT 5";

    $selectCountry = false;
    if($_REQUEST['country_id'] != 0){
        $query = "SELECT * FROM patients JOIN countries ON patients.country_id = countries.id WHERE patients.country_id =".$_REQUEST['country_id']. " ORDER BY patients.id DESC LIMIT 5";
        $selectCountry = true;    // da bi znao da je korisnik izabrao neku drzavu, jer ako nije izabrana nijedna drzava, ne treba da se ispisuje ispod tabele nista.
    }

    $result = mysqli_query($connection, $query);
    ?>

    <table class="tablePatients">
        <tr>
            <th>First and last name</th>
            <th>Birth year</th>
            <th>Country</th>
            <th>Infected</th>
            <th></th>
        </tr>
            <?php
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?= $row['first_name']?> <?= $row['last_name']?></td>
                    <td><?= $row['birth_year'] ?></td>
                    <td><?= $row['country_name'] ?></td>
                    <td>
                        <?php
                            if($row['infected'] == 0)
                                echo "No";
                            else
                                echo "Yes";
                        ?>
                    </td>
                    <td><a href="#">Delete</a></td>
                </tr>
    <?php
            }
    ?>
    </table>

<!--ispis ispod tabele-->
    <div>
        <?php
        if($selectCountry==true){
            $query = "SELECT * FROM patients JOIN countries ON patients.country_id = countries.id WHERE patients.country_id =".$_REQUEST['country_id'];
            $result = mysqli_query($connection, $query);

            $countInfected = 0;
            $countUninfected = 0;

            while($row = mysqli_fetch_assoc($result)){
                if($row['infected'] == 1)
                    $countInfected++;
                else
                    $countUninfected++;
                $countryName = $row['country_name'];
            }

            echo " All infected in ".$countryName.": ".$countInfected."<br>";
            echo " All uninfected in ".$countryName.": ".$countUninfected."<br>";
        }
        ?>
    </div>
    <?php
}
?>
