
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="form1" name="form1" method="post" action="bt2.php"  >
        <table style="width: 500;" >
            <tr>
                <h2>TẠO - GHI ĐỌC FILE</h2>
            </tr>
            <tr>
                <td><span>Tên file:</span></td>
                <td><label ><input type="text" name="ten_file" id="ten_file" value=" <?php echo $_POST["ten_file"]; ?>" ></label></td>
            </tr>
            <tr>
                <td><span>Nội dung:</span></td>
                <td><textarea type="text" name="noi_dung" id="noi_dung" cols="50" rows="4" value=" <?php echo $_POST["noi_dung"]; ?>" ></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Ghi và đọc file" ></td>
            </tr>
        </table>
    </form>
    <?php 
    error_reporting(0);
        if(isset($_POST["ten_file"]) && isset($_POST["noi_dung"])){
            $ten_file = $_POST["ten_file"];
            $noi_dung = $_POST["noi_dung"];
                $file = fopen("$ten_file","w",1);
                fwrite($file,$noi_dung);
                echo "<p><b> Da ghi filr thanh cong</b></p>";
                fclose($file);

                $file = fopen("$ten_file","r",1);
                echo "<b>Noi dung file </b>";
                    while(!feof($file)){
                        $noi_dung = fgets($file,1000);
                        echo nl2br($noi_dung);
                        fclose($file);
                    }
        }
    ?>
</body>
</html>