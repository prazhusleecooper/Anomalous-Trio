<?php
	


 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
          
           if(file_exists('users.json'))  
           {  
                $current_data = file_get_contents('users.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'Name'             =>     $_POST["name"],  
                     'Email'            =>     $_POST["email"],  
                     'Password'     	=>     $_POST["password"],
                     'Date of Birth'    =>     $_POST["dob"],
                     'Age'              =>     $_POST["age"],
                     'Address'          =>     $_POST["address"],
                     'Number'           =>     $_POST["number"],  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('employee_data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
       
 }  
 

?>  