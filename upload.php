<html>
<head>
  <title>��������� �������� �����</title>
</head>
<body>
<?php

$uploadfile = $_FILES['filename']['name'];
  move_uploaded_file($_FILES['filename']['tmp_name'], $uploadfile);

?>
</body>
</html>
