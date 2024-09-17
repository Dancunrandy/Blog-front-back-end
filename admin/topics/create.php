<?php include("../../path.php"); ?>
<?php  include(ROOT_PATH . "/app/controllers/topics.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d7c1c9e0e8.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <!-- Custom styling -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin section-Add Topic</title>
</head>
<body>
<!-- admin header -->
<?php include(ROOT_PATH ."/app/dry/adminHeader.php");?>
    <!-- Admin page wrapper -->
    <div class="admin-wrapper">
    
        <!-- Left sidebar -->
            
        <?php include(ROOT_PATH ."/app/dry/adminSidebar.php");?>
            
            <!-- Admin content -->
            
            <div class="admin-content">
            
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Topic</a>
                    <a href="index.php" class="btn btn-big">Manage Topics</a>
                </div>
                
                <div class="content">
                    <h2 class="page-title">Add Topic</h2>
                    <?php include(ROOT_PATH ."/app/helpers/formErrors.php");?>

                    
                    <form action="create.php" method="post">
                        <div>
                            <label>Name</label>
                            <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
                        </div>
                        
                        <div>
                            <label>Description</label>
                            <textarea name="description" id="body"><?php echo $description; ?></textarea>
                        </div>
                        <div>
                           <button type="submit" name="add-topic" class="btn btn-big">Add Topic</button>
                        </div>
                    </form>

                </div>
            
            </div>
            <!-- //Admin content -->
        
        
        <!-- // Left sidebar -->


    </div>
    
    <!-- End of Admin page wrapper -->

    
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- Ckeditor -->
    
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
    
    <script src="../../assets/js/scripts.js"></script>
</body>
</html>