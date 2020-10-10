<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
      <h1>Cross scription</h1>
      <?php
        echo htmlspecialchars('<script>alert('babo');</script>');
      ?>
    
</body>
</html>