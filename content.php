<?php
//DATABASE
$servername = "localhost";
$username = "root";
$password = "";
$db = "test";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>

    <head>
        <style>
            table {
                width: 500px;
            }
            table,
            td,
            th {
                border: 1px solid;
            }
        </style>
    </head>
    <body>
        <h1>
            Normal Table from Database
        </h1>
        <table>
            <th width="50%">Name</th>
            <th width="50%">Gred</th>
            <?php
            $sql="SELECT * FROM `gred`";
            $result= $conn->query($sql);
            while($row = $result->fetch_assoc()){?>
            <tr>
                <td style="text-align: center;">
                    <?php echo $row["name"];?>
                </td>
                <td style="text-align: center;">
                    <?php echo $row["gred"];?>
                </td>
            </tr>
            <?php
            }
           ?>
        </table>

        <h1>
            Sort gred In Order</h1>
    <?php
            $array2= array();
            $sql="SELECT * FROM `gred`";
            $result= $conn->query($sql);
            $lenght=0;
            while($row = $result->fetch_assoc()){ //PUASH ARRAY THAT NEED TO BE DISPLAY
                array_push($array2, $row["name"],$row["gred"]);
            }

            //COUNT THE ARRAY ELEMENT
            $lenght = count($array2);

            //PLEASE NOTE THAT THE INCREMENT CAN BE CHANGE BASE ON THE ELEMENT OG YOUR ARRAY PUSH ON LINE 61
            //THE REASON OF INCREMENT TWO IS THE FIRST ARRAY IS RELATE TO SECOND ARRAY
            for($i=0;$i<$lenght;$i=$i+2){
                for($everyElement=$i+2;$everyElement<$lenght;$everyElement=$everyElement+2){
                    if($array2[$i+1]>$array2[$everyElement+1]){
                        
                        //CREATE TEMPORARY VALUE FROM FIRST VALUE
                        $tempName=$array2[$i];
                        $tempGred=$array2[$i+1];

                        //REPLACE FIRST VALUE  WITH VALUE 
                        $array2[$i]=$array2[$everyElement];
                        $array2[$i+1]=$array2[$everyElement+1];

                        //REPLACE SECOND VALUE WITH TEMPORARY VALUE
                        $array2[$everyElement]=$tempName;
                        $array2[$everyElement+1]=$tempGred;
                    }
                }
            }
            //echo "<pre>";
            //print_r($array2);
            //echo "</pre>";
           ?>
            <table>
                <th width="50%">Name</th>
                <th width="50%">Gred</th>
                <?php
                //SIMPLE ECHO OF ARRAY
                $x=0;
                while($x<$lenght){?>
                <tr>
                    <td style="text-align: center;">
                        <?php echo $array2[$x];?>
                    </td>
                    <td style="text-align: center;">
                        <?php echo $array2[$x+1];?>
                    </td>
                </tr>
                <?php
                $x=$x+2;
                }
                ?>
            </table>
    </body>

</html>