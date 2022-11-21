<?php
include $_INNER_PATH."/models/house.php";
include $_INNER_PATH."/helperClasses/Validator.php";



class HouseController{

    public static function index()
    {
        // print_r("something");
        // die;
        $house = House::all();
        return $house;
    }

    public static function store()
    {   
        // if(Validator::validate()){
        //     header("Location: "."http://".$_SERVER['SERVER_NAME']."/namai_crud"."/views/house/add.php");
        //     die;
        // }


        // print_r($_POST['save']);
        // die;
        House::create();
    }

    public static function show()
    {

        // print_r("something");
        // die;
        // echo "something";
        // die;
        // echo($id);
        $house = House::find($_GET['id']);
		return $house;
    }

    public static function update()
    {
        if(Validator::validate()){
            header("Location: "."http://".$_SERVER['SERVER_NAME']."/namai_crud"."/views/house/edit.php?edit=&id=".$_GET['id']);
            die;
        }
        // echo"something";
        // die;
        $house = new House();
        $house->id = $_POST['id'];
        $house->address = $_POST['address'];
        $house->roomCount = $_POST['roomCount'];
        $house->isHouse = $_POST['isHouse'];
        $house->floor = $_POST['floor'];
        $house->update();
    }

    public static function destroy()
    {
        House::destroy($_POST['id']);
    }

    public static function filter()
    {
        return House::filter();
        
    }
    public static function search()
    {
        return House::search();
    }
    

    public static function getfilterParams(){
        return House::getfilterParams();
     }







}
?>