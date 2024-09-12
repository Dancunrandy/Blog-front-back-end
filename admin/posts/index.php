<?php include("../../path.php"); ?>

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

    <title>Admin section-Manage Posts</title>
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
                    <a href="create.php" class="btn btn-big">Add post</a>
                    <a href="index.php" class="btn btn-big">Manage posts</a>
                </div>
                
                <div class="content">
                    <h2 class="page-title">Manage Posts</h2>
                    
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th colspan="3">Action</th>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>This is the first post</td>
                                <td>Dante</td>
                                <td><a href="#" class="edit">Edit</a></td>
                                <td><a href="#" class="delete">Delete</a></td>
                                <td><a href="#" class="publish">Publish</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>This is the second post</td>
                                <td>Randy</td>
                                <td><a href="#" class="edit">Edit</a></td>
                                <td><a href="#" class="delete">Delete</a></td>
                                <td><a href="#" class="publish">Publish</a></td>
                            </tr>
                        </tbody>
                    </table>
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