<?php

    class Car {

        function carname() {
            echo "MERCEDIES AMG Series...";
        }

    }

    if(method_exists("Car","carname")){
        echo "Yes, method exists!!";
    }
    else{
        echo "No, method does not exists!!";
    }

?>