<!DOCTYPE HTML>
<hmtl>
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
             font-size: 30px;
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
            left: 38%;
            width:400px;
            height:500px;
            border-radius: 20px;
            background-color: white;
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
            $isbn=$_POST['isbn_num'];
            $user_name=$_POST['user_name'];
            $password1=$_POST['user_pass'];
            $conn=new mysqli($servername,$username,$password,$db);
            $sql=$conn->query("select status from books_available where ISBN=$isbn");
            if($sql->num_rows>0)
            {
                while($row=$sql->fetch_assoc())
                {
                    $res=$row['status'];
                }
            }
            if($res=='available')
            {
                $todate=date('Y-m-d');
                $upd1=$conn->query("update books_available set status='issued' where ISBN=$isbn");
                 $upd2=$conn->query("update books_available set user_name='$user_name' where ISBN=$isbn");
                 $upd3=$conn->query("update books_available set password='$password1' where ISBN=$isbn");
                $upd4=$conn->query("update books_available set date_of_issue='$todate' where ISBN=$isbn");
                  echo "<br>Success!!!<br><br>"; 
             
            }
            else{
                
                echo "<br><br>Sorry!!! The book is Unavailable";
                echo "<br>Try Something else<br><br>";
            }

            ?>
              <a href="books_available.php">CHECK DATABASE</a><br><br>
            <a href="home.php">GO TO HOME</a>
        </div>
    </body>
</hmtl>