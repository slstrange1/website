<?php

require("header.php");
require('helpers.php');

// Assign the file name and location to a variable

$id = isset($_GET['id']) ? $_GET['id'] : null;
$file = 'content/blog.csv';

$form_data = null;
if ($id) {
    $file_open = fopen($file, "r");

    $row = 0;
    while (($data = fgetcsv($file_open, 3000, ",")) !== FALSE) {
        if($row = $id) {
            $form_data = [
                'title' => $data[0],
                'body' => $data[1],
                'author' => $data[2],
                'date' => $data[3],
                'picture' => $data[4],
                
            ];
            break;
        }
        $row++;
    }
}

// Check if ID isset on post, then update record in place in the blog.csv file

if ($id && isset($_POST['title']) && isset($_POST['body'])) {


}

// Check if title and body are set in the post request

if(isset($_POST['title']) && isset($_POST['body']) && !$id) {

    // Assign new and clean variables for readability
    // Convert special characters in title and body to HTML safe entities

    $title = htmlspecialchars($_POST['title']);
    $picture = $_POST['picture'];
    $body = htmlspecialchars($_POST['body']);
    $author = $_POST['author'];

    // Get the current contents of the blog.csv file

    $current = file_get_contents($file);

    // Build the next line in our blog.csv file

    $current .= "\"";
    $current .= implode('","', [
        $title,
        $body,
        $author,
        date('M/j/Y'),
        $picture,
    ]);

    $current .= "\"\n";

    // Write the contents to the blog.csv file

    file_put_contents($file, $current);

}

?>

<h1>Admin</h1>
<hr />

<h2>Add a Blog Post</h2>
<form action="/admin.php" method="post">
    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" class="form-control" placeholder="Enter your title" value="<?=@$form_data['title']?>" />
    </div>
    <div class="form-group">
        <label for="author">Author</label>
        <select class="form-control" name="author" placeholder="Select">
            <option value="" disabled>Select</option>
            <option value="samantha" <?=getSelectKeyFromValue('samantha', @$form_data['author'])?>>Samantha</option>
            <option value="ryan" <?=getSelectKeyFromValue('ryan', @$form_data['author'])?>>Ryan</option>
        </select>
    </div>
    <div class="form-group">
        <label for="picture">Picture</label>
        <input name="picture" class="form-control" placeholder="Enter your picture" value="<?=@$form_data['picture']?>" />
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" class="form-control" rows="10"><?=@$form_data['body']?>
        </textarea>
    </div>
    <button class="btn btn-primary" type="submit">Create Blog Post</button>    
</form>

<!-- <div class="row mb-4">
    <div class="col-md-3">
        Dogs
    </div>
    <div class="col-md-3">
        Cats
    </div>
    <div class="col-md-3">
        Birds
    </div>
    <div class="col-md-3">
        Rabbits
    </div>
</div> -->




<?php

require("footer.php");


?>

