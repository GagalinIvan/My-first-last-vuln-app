<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" contex="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/style.css"> 
     <title>OnlyBro</title>
</head>
<body>

</body>
</html>
<div class="container"> 
 <form action='guestbook.php' method='post'>
<label> Name </label> 
<input type="text" name='name'><br>
<label> E-mail </label> 
<input type="email" name='email'><br>
<label> Message </label> 
<input type="text" name='msg'><br>
<label> File </label> 
<input type="file" name="userfile">
<button type="submit">Send</button>
 </form>

 <hr>
 

<?php

require("comment.html");


           if(isset($_POST['name'])) {
                $fname = $_POST['name'];
                $email = $_POST['email'];
                $msg = $_POST['msg'];
              
                     $file = fopen("comment.html","a");
                     fwrite($file, "<b>Sender:</b> ". $fname."<br>");
                     fwrite($file, "<b>Email:</b> ".$email."<br>");
                     fwrite($file, "<b>Message:</b> ".$msg."<hr>");
                     fclose($file);
                     
                     header('Location: /');
                    }
           
            
          

               
?>
</div>


  