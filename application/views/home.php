<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>random word (attempt : # <?= ($this->session->userdata('count')) ? $this->session->userdata('count') : 0; ?>) </h1>

     <h2><?= ($this->session->userdata('randword')) ? $this->session->userdata('randword') : "This is the random word"; ?></h2>
     <a href="home/process_rand">Generate</a>
</body>
</html>