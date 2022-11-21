<?php 
include "../components/head.php"; 
include $_INNER_PATH ."/routes.php"; 
// $old = false;
// if(isset($_SESSION['POST'])){
//     if(count($_SESSION['POST']) != 0){
//         $old = true;
//     }
// }
?>
<link rel="stylesheet" href="<?= $_OUTER_PATH ."./css/style.css"?>">

<body>

    <div class="container">


        <div class="row">
            <div class="col-4 left"></div>
            <div class="col-4 big">

                <h1>Add new building </h1>
                <form action="" method="post">

                    <div class="form-group">
                        <label for="f1">Address:</label>
                        <textarea class="form-control" type="text" name="address"
                            placeholder="eg. Country, city, flat number " rows="3" id="f4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="f2">Room Count:</label>
                        <input type="number" name="roomCount" id="f2" class="form-control" placeholder="eg.1">
                    </div>




                    <label class="">Building type</label>
                    <div>
                        <select class="form-select" onchange="checkType()" name="buldingType">
                            <option disabled selected value></option>
                            <option value="0">Flat</option>
                            <option value="1">House</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="f4">Floor:</label>
                        <input type="number" name="floor" id="f2" class="form-control" placeholder="eg.3">
                    </div>


                    <button type="submit" name="save" class="btn btn-primary mt-3 mb-3">SAVE</button>


            </div>
            <div class="col-4 right"></div>
        </div>
        </form>


        <script>
        function checkType() {
            isHouse = document.getElementById("type").value;
            floor = document.getElementById("floor");

            if (buildingType == 0) {
                floor.disabled = "";
            }
            if (buildingType == 1) {
                floor.disabled = "disabled";
            }
        }
        </script>

        <?php
    $_SESSION['POST'] = [];
?>