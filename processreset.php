<?php


    if(isset($_POST['submit'])){

        function result(){
            $name = $_POST['name'];
            $password = $_POST['password'];

            $filedata = file_get_contents('Data.json');
            $filearr = json_decode($filedata, true);

            $namearr = array();
            $index = null;
            $oldpassword = null;
            foreach ($filearr as $key => $value) {
                $namearr[] = $value['name'];
                if($name == $value['name']){
                    $index = $key;
                }
            }

            if(in_array($name, $namearr)){
                $oldpassword = $filearr[$index]['password'];
            
            

                if ($password != $oldpassword && in_array($name, $namearr)) {
                    $filearr[$index]['password'] = $password;
                    echo "Password updated, login with your new password";
                    file_put_contents("Data.json", json_encode($filearr));
                }

                else{
                    echo "same password <br/>";
                    echo "<a href=" . "resetpassword.php" . ">Try again here</a>";
                }

            }
            else{
                echo "Username not found <br/>";
                echo "<a href=" . "resetpassword.php" . ">Try again here</a>";
            }

             
        }

       result();
    }
?>