<!DOCTYPE HTML>
<html>
    <style>
        header{
            font-family:papyrus;
            font-weight: bold;
            font-size:40px; 
            color: floralwhite;
            text-align: center;
        }
         body{
            
            background-image: url("library1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
             text-decoration:none;
             text-align: center;
            animation-name: back_anim;
            animation-duration: 12s;
            animation-iteration-count: infinite;
        }
        @keyframes back_anim{
            0%{background-image:url("library1.jpg");color: chocolate;}
            25%{background-image:url("library2.jpg");color: darkorchid;}
            50%{background-image:url("library3.jpg");color: red;}
            75%{background-image:url("library4.jpg");color: firebrick;}
            100%{background-image:url("library1.jpg");color: chocolate;}
        }
         div{
            position: absolute;
            top: 20%;
            left: 42%;
            width:400px;
            height:500px;
            border-radius: 20px;
            background-color: white;
            
        }
        img{
            position: absolute;
            top: -10%;
            left:38%;
            width: 80px;
            height: 80px;
            
        }
          form {
            text-align: center;
            padding:20px 30px;
            font-size: 20px;
            font-family: papyrus;
            font-weight:bolder;
        }
        form input[type="number"],input[type="text"]{
            outline: none;
            border: none;
            border-bottom: 1.5px solid blue;
        }
         div a{
             position: absolute;
             left: 23%;
             text-align: center;
             background-color: dodgerblue;
             color:white;
             border-radius: 10px;
             padding: 10px;
             text-decoration: none;
             font-size: 20px;  
         }
         div a:hover{
             
             background-color: green;
         }
        p{
            
            font-size: 20px;
            padding: 30px 30px;
        }
        </style>
    <header>
        THE LIBRARY MANAGEMENT SYSTEM
    </header>
    <body>
        <div>
          <?php
            $servername="localhost";
            $username="root";
            $password="";
            $db="library_project";
            $isbn2=$_POST['isbn_num'];
            $user_name2=$_POST['user_name'];
            $conn=new mysqli($servername,$username,$password,$db);
     
            $sql=$conn->query("update books_available set status='available' where ISBN=$isbn2");
            $sql2=$conn->query("update books_available set user_name='NULL' where ISBN=$isbn2");
            $sql3=$conn->query("update books_available set password='NULL' where ISBN=$isbn2");
            $sql4=$conn->query("update books_available set date_of_issue='NULL' where ISBN=$isbn2");
            echo "<p>YOUR BOOK HAS BEEN RETUENED SUCCESSFULLY!!!<br><br>Thank you</p>";

          ?>
            <a href="books_available.php">CHECK DATABASE</a><br><br>
            <br><br><a href="home.php">HOME</a>
        </div>
    </body>
</html>
