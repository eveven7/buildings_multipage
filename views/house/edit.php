<?php 
$_INNER_PATH = $_SERVER['DOCUMENT_ROOT']."/namai_crud";
$_OUTER_PATH = "http://".$_SERVER['SERVER_NAME']."/namai_crud";
include $_INNER_PATH ."/routes.php"; 

include "../components/head.php"; 
$old = false;
if(isset($_SESSION['POST'])){
    if(count($_SESSION['POST']) != 0){
        $old = true;
    }
}
?>
<link rel="stylesheet" href="<?= $_OUTER_PATH ."./css/style.css"?>">

<body>

    <div class="container">


        <div class="row">
            <div class="col-4 left"></div>
            <div class="col-4 big">

                <h1>Product update </h1>

                <form action="" method="post" class="form-group" name="update">

                    <div class="form-group">
                        <label for="f1">Adress:</label>
                        <textarea class="form-control" placeholder="Adress" name="address" rows="3"
                            id="f4">  <?=($old)? $_SESSION['POST']['address'] : $house->address?> </textarea>

                    </div>

                    <div class="form-group">
                        <label for="f2">Room count</label>
                        <input type="number" name="roomCount" id="f2" class="form-control"
                            value="<?=($old) ? $_SESSION['POST']['roomCount'] : $house->roomCount?>" placeholder="eg.1">
                    </div>

                    <div class="form-group">
                        <label for="f3">Building type</label>

                        <select class="form-select" name="isHouse">

                            <option value="1">House</option>
                            <option value="0">Flat</option>

                        </select>

                    </div>


                    <div class="form-group">
                        <label for="f2">Floor</label>
                        <input type="number" name="floor" id="f2" class="form-control"
                            value="<?=($old) ? $_SESSION['POST']['floor'] : $house->floor?>" placeholder="">
                    </div>

                    <input type="hidden" name="id" value="<?=$house->id?>">
                    <button type="submit" name="update" class="btn btn-success mt-3 mb-3">Save</button>

            </div>
            <div class="col-4 right"></div>
        </div>
        </form>

    </div>
</body>

</html>




<?php
    $_SESSION['POST'] = [];
?>