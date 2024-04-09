<?php

//ESERCIZIO CONTROLLO PASSWORD

    $password = readline("Please insert password: ");   
    
    if (checkPassword($password) === true){
        echo "Valid Password!";
        return true;
    } 
  
    function checkPassword($password){
    
        while(passwordLength($password) === false){
            echo "Error: Your password must be at least 10 characters long\n ";
            $password = readline("Please insert password: ");
            
        }
        
       while(checkNumber($password) === false){
            echo "Error: Your password must contain at least a number \n";
            $password = readline("Please insert password: ");
        }
    
       while(checkCharacter($password) === false){
            echo "Error: Your password must contain at least a character \n";
            $password = readline("Please insert password: ");
        }
    
        return true;
    
    }
  
    function passwordLength($password){
        if (strlen($password)>=10){
            return true;
        } else {
            return false;
        }
    }
    
    function checkNumber($password){
        for ($i=0; $i < strlen($password) ; $i++) { 
            if (is_numeric($password[$i])){
                return true;
            }
        } return false;
    }
    
    function checkCharacter($password){
        for ($i=0; $i < strlen($password) ; $i++) { 
            if (!is_numeric($password[$i])){
                return true;
            }
        } return false;
    }



    