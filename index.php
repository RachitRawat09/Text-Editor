<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CKEditor Form</title>

    <!-- CKEditor CDN -->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>
<body>
    <div class="container my-3">
        
        
        <!-- Form that submits data to save_content.php -->
        <form action="" method="post">
            <!-- CKEditor text area -->
            <textarea name="editor_content" id="editor">
                <p></p>
            </textarea>
            
            <!-- Submit Button -->
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>

    <script>
        // Initialize CKEditor
        CKEDITOR.replace('editor');
    </script>
</body>
</html>
