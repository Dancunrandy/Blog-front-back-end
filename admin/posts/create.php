<?php include("../../path.php"); ?>
<?php  include(ROOT_PATH . "/app/controllers/posts.php"); ?>


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

    <title>Admin section-Add Post</title>
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
                <h2 class="page-title">Add Post</h2>
                
                <form action="create.php" method="post">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" class="text-input">
                    </div>
                    
                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body"></textarea>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>
                    
                    <div>
                        <label>Topic</label>
                        <select name="topic_id" class="text-input">
                            <option value=""></option>  
                            <?php foreach ($topics as $key => $topic):  ?>
                                <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>

                            <?php endforeach; ?>
                            
                            
                            
                        </select>
                    </div>
                    <div>
                       <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
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