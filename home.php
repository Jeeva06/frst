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
        li{
            width:250px;
            height:100px;
            cursor: pointer;
            font-size:39px;
            text-decoration:none;
             padding:10px 20px;
            background-color: cornflowerblue;
            color:white;
            border-radius:10px;
        }
        li a{
            text-decoration: none;
            color:whitesmoke;
        }
        li:hover{
            transition: 0.9s;
            width:300px;
            font-size:43px;
            border:3px solid white;
            background-color: crimson;
            height: 150px;
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
            left: 60%;
            width:300px;
            height:400px;
            border-radius: 20px;
            background-color: white;
            
        }
        img{
            position: absolute;
            top: -10%;
            left:38%;
            cursor: pointer;
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
        form input[type="text"],input[type="password"]{
            outline: none;
            border: none;
            border-bottom: 1.5px solid blue;
        }
        form input[type="submit"]{
            width: 130px;
            height: 40px;
            border-radius: 20px;
            background-color: green;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }
        p{
            font-size: 30px;
            font-family: sans-serif;
        }
    </style>
    <header>
        <marquee behavior="alternate">THE LIBRARY MANAGEMENT SYSTEM</marquee>
    </header>
    <body>
            <ul><br><br><br>
                <li><a href="books_available.php">BOOKS AVAILABLE</a></li><br><br><br>
                <li><a href="issue.php">ISSUE </a></li><br><br><br>
                <li><a href="return.php">RETURN </a></li><br><br><br>
            </ul>
        <div>
            <img src="person.png">
            <form action="admin_calc.php" method="post">
                <p>ADMIN LOGIN</p>
                 USER NAME<br>
                <input type="text" name="admin_name" placeholder="Enter Name" required><br><br>
                <br>PASSWORD<br>
                 <input type="password" name="admin_pass" placeholder="Enter password" required><br><br>
                <input type="submit" name="admin_submit" value="LOGIN">
            </form>
        </div>
    </body>
</html>
