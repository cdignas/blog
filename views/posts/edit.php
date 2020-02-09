<h1>Edit Post</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title"
               value ="<?php if (isset($post["title"])) echo $post["title"];?>">
    </div>

    <div class="form-group">
        <label for="description">Text</label>

        <textarea class="form-control" id="text" rows="20" name="text">
            <?= $post["text"] ?>
        </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>