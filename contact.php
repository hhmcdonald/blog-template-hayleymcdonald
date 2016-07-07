<main>
    <?php
        $animalName     = "";
        $animalType     = "";
        $animalSize     = "";
        $animalLocation = "";
        $animalDoa      = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $animalName     = animalValidation($_POST["name"]);
        $animalType     = animalValidation($_POST["type"]);
        $animalSize     = animalValidation($_POST["size"]);
        $animalLocation = animalValidation($_POST["location"]);
        $animalDoa      = animalValidation($_POST["doa"]);
    }
    function animalValidation($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" value="<?php echo $animalName;?>"><br />
        Type: <input type="text" name="type" value="<?php echo $animalType;?>"><br />
        Size: <input type="text" name="size" value="<?php echo $animalSize;?>"><br />
        Location: <input type="text" name="location" value="<?php echo $animalLocation;?>"><br />
        Date of Acquisition: <input type="text" name="doa" value="<?php echo $animalDoa;?>"><br />
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        array_push(
            $animals,
            array($animalName, $animalType, $animalSize, $animalLocation, $animalDoa)
        );
    ?>

    <h3>Animal List</h3>
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Type</td>
                <td>Size</td>
                <td>Location</td>
                <td>Date of Acquisition</td>
            </tr>
        </thead>
        <tbody>

        <?php
        if ( $animals ) {
            $animalsCount = count($animals) - 1;
            $animalsVal   = 0;

        while ( $animalsVal <=  $animalsCount ) { ?>
            <tr>
                <td>
                    <?php echo $animals[$animalsVal][0]; ?>
                </td>
                <td>
                    <?php echo $animals[$animalsVal][1]; ?>
                </td>
                <td>
                    <?php echo $animals[$animalsVal][2]; ?>
                </td>
                <td>
                    <?php echo $animals[$animalsVal][3]; ?>
                </td>
                <td>
                    <?php echo $animals[$animalsVal][4]; ?>
                </td>
            </tr>

            <?php

            $animalsVal++;
            } // end while

            unset($animalsVal);
            } // end if

            ?>
        </tbody>
    </table>
</main>
