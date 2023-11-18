<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contact-form">
        <h1>Contact US</h1>
    </div>
    <div class="contact-us">
       <form action="save.php" method="post">
           <input type="text" name="name"   class="form-control" placeholder="Enter Name"> <br>
           <input type="email" name="email"  class="form-control" placeholder="Enter Email"> <br>
           <input type="text" name="mobile"  class="form-control" placeholder="Enter Mobile Number"> <br>
           <input type="submit" class="form-control submit" value="submit" >
       </form>
    </div>
</body>
</html>