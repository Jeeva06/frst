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
            width:300px;
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
        form input[type="number"],input[type="text"],input[type="password"]{
            outline: none;
            border: none;
            border-bottom: 1.5px solid blue;
        }
          form input[type="submit"]{
            width: 130px;
            height: 40px;
            border-radius: 20px;
            background-color: dodgerblue;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }
        </style>
    <header>
        THE LIBRARY MANAGEMENT SYSTEM
    </header>
    <body>
        <div>
            <img src="person.png">
            <form action="issue_calc.php" method="post">
                <br><br>USER NAME<br>
                <input type="text" name="user_name" placeholder="Enter Name" required><br><br>
                 <br>PASSWORD<br>
                 <input type="password" name="user_pass" placeholder="Enter password" required><br><br>
                <br>ISBN<br>
                <input type="number" name="isbn_num" placeholder="Enter ISBN number" required><br><br>
                  <input type="submit" name="admin_submit" value="ISSUE">
                 </form>
        </div>
    </body>
</html>
