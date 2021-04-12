<?php

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $dob = $_POST['DOB'];
        $password = $_POST['password'];

        echo "Name is $name, $age years old, I'm still pretty young $dob <br/>";
        

        if(!file_exists('Data.json')) {
            $arr = array(
           
                'name' => $name,
                'age' => $age,
                'DOB' => $dob,
                'password' => $password
                
            );

            $response[] = $arr;

            //print_r($response);
            file_put_contents("Data.json", json_encode($response));

            echo "Registered ";
            echo "<a href=" . "logout.php" . ">Click here to Logout</a>";
        }

        else {

            $filedata = file_get_contents('Data.json');
            $response = json_decode($filedata, true);

            $namearr = array();

            foreach ($response as $key => $value) {
                $namearr[] = $value['name'];
            }

            $arr = array(
                'name' => $name,
                'age' => $age,
                'DOB' => $dob,
                'password' => $password
            );

            $response[] = $arr;

            if (!in_array($name, $namearr)){
                //var_dump($response);
                file_put_contents("Data.json", json_encode($response));
                echo "Registered ";
                echo "<a href=" . "logout.php" . ">Click here to Logout</a>";
            }
            else {
                echo "<h3>cant register, same username, please register with another username</h3> <br/>";
                echo "<a href=" . "registration.php" . ">register here</a>";
            }
        }

        $current = file_get_contents('Data.json');
        $filedata = json_decode($current, true);

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

