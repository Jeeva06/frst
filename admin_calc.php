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
            animation-name: back_anim;
            animation-duration: 12s;
            animation-iteration-count: infinite;
        }
        @keyframes back_anim{
            0%{background-image:url("library1.jpg");color: yellowgreen;}
            25%{background-image:url("library2.jpg");color: darkorchid;}
            50%{background-image:url("library3.jpg");color: red;}
            75%{background-image:url("library4.jpg");color:black;}
            100%{background-image:url("library1.jpg");color: yellowgreen;}
        }
         div{
            position: absolute;
            top: 20%;
            left: 38%;
            width:400px;
            height:400px;
            border-radius: 20px;
            background-color: white;  
        }
         form {
            text-align: center;
            padding:20px 30px;
            font-size: 20px;
            font-family: papyrus;
            font-weight:bolder;
        }
        form input[type="number"],input[type="text"],input[type="password"]{
            outline: none;
            border: none;
            border-bottom: 1.5px solid blue;
        }
          form input[type="submit"]{
            width: 230px;
            height: 45px;
            border-radius: 20px;
            background-color: dodgerblue;
            color: white;
            font-size: 18px;
              cursor: pointer;
        }
         </style>
    <header>
        THE LIBRARY MANAGEMENT SYSTEM
    </header>
    <body>
        <div>
            <?php 
            $auth_name=$_POST['admin_name'];
            $auth_pass=$_POST['admin_pass'];
            if(($auth_name=='admin')&&($auth_pass=='admin'))
            {
                echo "<br><br>ADMIN LOGIN SUCCESSFUL";
              echo"
                    <form action='admin.php'>
                    <input type='submit' value='ADD/REMOVE BOOKS'><br><br>
                    </form>";
            }

            else{
                echo"<br><br>ADMIN LOGIN FAILED";
                echo"<form action='home.php'>
                <input type='submit' value='HOME'>
                </form>";
            }
?>
        </div>
    </body>
</hmtl>