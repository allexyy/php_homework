<form action="server.php" method="POST" enctype='multipart/form-data'>
<p>Load image</p>
<input type="file" name="image">
<button type="submit">Let's go</button>
</form>
<?php
include_once "loadimage.php";
?>