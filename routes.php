<?php

include $_INNER_PATH."/controllers/HouseController.php";

$edit = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    if(isset($_POST['save'])){
         
        HouseController::store();
        // print_r($_POST['save']);
        //     die;
        header("Location: ./index.php");
        die;
    }      

    if(isset($_POST['edit'])){
        // echo"something";
        // die;
    
        $house = HouseController::show();
        $houses = HouseController::index();
        // $edit = true;
    }  

    if(isset($_POST['update'])){
        //  print_r($houses);
        //     die;
        //  echo"something";
        //     die;
        HouseController::update();
        header("Location: ./index.php");
        die;
    }

    if(isset($_POST['destroy'])){
        HouseController::destroy();
        header("Location: ./index.php");
        die;
    }

}

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        
        if(count($_GET) == 0 || isset($_GET['cards'])){
            $houses = HouseController::index(); 
        }
        
        if(isset($_GET['show']) ){
    
          
            $house = HouseController::show($_GET['id']); 
            //  print_r($house);
            // die;
            //      print_r("something");
            // die;
            // $houses = HouseController::index();
            //  echo "something";
            // die;
    
    
        }
        if (isset($_GET['search'])) {
            $houses = HouseController::search();
    
    }
        
        if(isset($_GET['edit'])){
            //  echo"something";
            // die;
            $house = HouseController::show($_GET['id']);
            $houses = HouseController::index();
    
        }  
        if (isset($_GET['filter']) ) {
            $houses = HouseController::filter();
            
        }
    
        
    }
    $params = HouseController::getfilterParams();
    ?>