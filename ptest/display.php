<?php
    include_once 'database.php';
    $q1 = mysqli_query($conn, "SELECT candidate, dob FROM candidate");
    $q2 = mysqli_query($conn, "SELECT firstname, lastname , party FROM voter");
    $q3 = mysqli_query($conn, "SELECT firstname, lastname , id FROM volunteer");
    $q4 = mysqli_query($conn, "SELECT firstname, lastname , addr, city FROM voter");
    $q5 = mysqli_query($conn, "SELECT candidate.candidate, party FROM candidate");
    $q6 = mysqli_query($conn, "SELECT firstname, lastname, city FROM `voter` WHERE city = 'Atlanta'");
    $q8 = mysqli_query($conn, "SELECT id, firstname, lastname, candidate, location FROM `volunteer`");
    
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Display Queries</title>
    </head>
    <body>
        <h1>Queries</h1>
    <?php
        if(mysqli_num_rows($q1) > 0){
            ?>
            <table>
                <h2>Q1: Find all Candidate's names and DOB</h2>
            <tr>
                <th>Candidate Name</th>
                <th>Candidate DOB</th>
            </tr>
            <?php
            $i = 0;   
            while($row = mysqli_fetch_array($q1)){
                ?>
                <tr>
                    <td><?php echo $row["candidate"];?></td>
                    <td><?php echo $row["dob"];?></td>
                </tr>
                <?php
                $i++;
            }
            ?>
            </table>
            <?php
        }
        else{
            echo "No results found.";
        }
        ?>



        <?php 
        if(mysqli_num_rows($q2) > 0){
            ?>
            <table>
                <h2>Q2: Find all Voter's names and party</h2>
            <tr>
                <th>Voter First Name</th>
                <th>Voter Last Name</th>
                <th>Voter Party</th>
            </tr>
            <?php
            $i = 0;   
            while($row = mysqli_fetch_array($q2)){
                ?>
                <tr>
                    <td><?php echo $row["firstname"];?></td>
                    <td><?php echo $row["lastname"];?></td>
                    <td><?php echo $row["party"];?></td>
                </tr>
                <?php
                $i++;
            }
            ?>
            </table>
            <?php
        }
        else{
            echo "No results found.";
        }
        ?>

<?php 
        if(mysqli_num_rows($q3) > 0){
            ?>
            <table>
                <h2>Q3: Find names and IDs of all volunteers</h2>
            <tr>
                <th>volunteer First Name</th>
                <th>volunteer Last Name</th>>
                <th>volunteer ID</th>
            </tr>
            <?php
            $i = 0;   
            while($row = mysqli_fetch_array($q3)){
                ?>
                <tr>
                    <td><?php echo $row["firstname"];?></td>
                    <td><?php echo $row["lastname"];?></td>
                    <td><?php echo $row["id"];?></td>

                </tr>
                <?php
                $i++;
            }
            ?>
            </table>
            <?php
        }
        else{
            echo "No results found.";
        }
        ?>


<?php 
        if(mysqli_num_rows($q4) > 0){
            ?>
            <table>
                <h2>Q4: Find names of all Voters and their address</h2>
            <tr>
                <th>Voter First Name</th>
                <th>Voter Last Name</th>
                <th>Voter addr</th>
                <th>Voter City</th>
            </tr>
            <?php
            $i = 0;   
            while($row = mysqli_fetch_array($q4)){
                ?>
                <tr>
                    <td><?php echo $row["firstname"];?></td>
                    <td><?php echo $row["lastname"];?></td>
                    <td><?php echo $row["addr"];?></td>
                    <td><?php echo $row["city"];?></td>
                </tr>
                <?php
                $i++;
            }
            ?>
            </table>
            <?php
        }
        else{
            echo "No results found.";
        }
        ?>

<?php 
        if(mysqli_num_rows($q5) > 0){
            ?>
            <table>
                <h2>Q5: Find all Candidate's names and party</h2>
            <tr>
                <th>Candidate's Name</th>
                <th>Candidate Party</th>
            </tr>
            <?php
            $i = 0;   
            while($row = mysqli_fetch_array($q5)){
                ?>
                <tr>
                    <td><?php echo $row["candidate"];?></td>
                    <td><?php echo $row["party"];?></td>
                </tr>
                <?php
                $i++;
            }
            ?>
            </table>
            <?php
        }
        else{
            echo "No results found.";
        }
        ?>

<?php 
        if(mysqli_num_rows($q6) > 0){
            ?>
            <table>
                <h2>Q6: Find voters who live in Atlanta and their party</h2>
            <tr>
                <th>Voter's First Name</th>
                <th>Voter's Last Name</th>
                <th>Voter's City</th>
            </tr>
            <?php
            $i = 0;   
            while($row = mysqli_fetch_array($q6)){
                ?>
                <tr>
                    <td><?php echo $row["firstname"];?></td>
                    <td><?php echo $row["lastname"];?></td>
                    <td><?php echo $row["city"];?></td>
                </tr>
                <?php
                $i++;
            }
            ?>
            </table>
            <?php
        }
        else{
            echo "No results found.";
        }
        ?>

<?php 
        if(mysqli_num_rows($q8) > 0){
            ?>
            <table>
                <h2>Q7: Find all information on volunteers</h2>
            <tr>
                <th>Volunteer's ID</th>
                <th>Volunteer's First Name</th>
                <th>Volunteer's Last Name</th>
                <th>Volunteer's Candidate</th>
                <th>Volunteer's location</th>
            </tr>
            <?php
            $i = 0;   
            while($row = mysqli_fetch_array($q8)){
                ?>
                <tr>
                    <td><?php echo $row["id"];?></td>
                    <td><?php echo $row["firstname"];?></td>
                    <td><?php echo $row["lastname"];?></td>
                    <td><?php echo $row["candidate"];?></td>
                    <td><?php echo $row["location"];?></td>
                </tr>
                <?php
                $i++;
            }
            ?>
            </table>
            <?php
        }
        else{
            echo "No results found.";
        }
        ?>
        
        

    </body>
</html>