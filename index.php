<?php 
session_start();
include('includes/header.php'); ?>  

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php 
                        if(isset($_SESSION['message'])){
                            ?>    
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Hey Folk!</strong> <?= $_SESSION['message']; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php
                            unset($_SESSION['message']);
                        }
                    ?>  
                    <h1>Hello World</h1>
                </div>
            </div>
        </div>
    </div>


    

    <!-- Optional JavaScript; choose one of the two! -->
   
<?php include('includes/footer.php');?>  
  