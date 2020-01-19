<br />A kép feltöltése

<form name="upload" method="POST" action="">
    Image: <input type="text" name="thumbnail"><br />
    Author: <input type="text" name="author"><br />
    <input type="submit" name="btnSubmit" value="Feltölt"><br />
</form>

<?php
if(isset($_POST["btnSubmit"]))
{
    $thumbnail = $_POST["thumbnail"];
    $author = $_POST["author"];
    echo $thumbnail." ".$author."<br>";

    $marks = array("thumbnail"=>$thumbnail, "author"=>$author);
    echo json_encode($marks);
    $h = fopen("data.json", "r+");
    fseek($h,-1,SEEK_END);
    fwrite($h,",".json_encode($marks)."]");
}

?>