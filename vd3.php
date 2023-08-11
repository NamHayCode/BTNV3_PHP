<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $content = $_POST["content"];

    if (!empty($name)) {
        $fl = fopen($name, 'w');
        fwrite($fl, $content);
        fclose($fl);
    }
}
?>

<div style="background-color: crimson; text-align: center;">
    <form action="vd3.php" method="post">
        <label for="name">name:</label>
        <input type="text" id="name" name="name"><br><br>
    
        <label for="content">content:</label>
        <textarea type="text" id="content" name="content"></textarea> <br><br>
    
        <input type="submit" value="Submit">
    </form>
</div>

<div style="background-color: crimson; text-align: center; ">
    <?php 
    if (!empty($name)) { 
        $fl = fopen($name, 'r+');
        while (($line = fgets($fl)) !== false) {
            ?>
            <p style="color: aliceblue;"> <?php echo $line; ?> </p> 
            <?php
        }
        fclose($fl);
    }
    ?>
</div>
