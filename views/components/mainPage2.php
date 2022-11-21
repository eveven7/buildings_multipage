<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-caption">
                    <h1 class="page-title"> Buildings </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card-section">
    <div class="container">
        <div class="card-block bg-white mb30">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- section-title -->
                    <div class="section-title mb-0">
                        <h2></h2>
                        <p>Our approach is very simple: we define your problem and give the best solution. </p>
                    </div>
                    <!-- /.section-title -->
                </div>
            </div>
        </div>

        <!-- Form cards -->



        <div class="cards">


            <?php 
            if(isset($_GET['cards'])){
                echo "rdom cards";
            }else{
                echo "rdom table";
            }
            
            foreach ($houses as $house) {?>
            cia a... teiblas
            <?php }?>
        </div>