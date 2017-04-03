<html>
<head>
  <title>Результат загрузки файла</title>
</head>
<body>
<?php

$uploadfile = "images/".$_FILES['filename']['name'];
  move_uploaded_file($_FILES['filename']['tmp_name'], $uploadfile);

?>
</body>
</html>
