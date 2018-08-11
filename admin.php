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
            height:600px;
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
            width: 170px;
            height: 40px;
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
           
          <br><br>ADMIN LOGIN SUCCESSFULL<br>
            <form action="final_add.php" method="post">
                <br>BOOK NAME<br>
                <input type="text" name="book_name" placeholder="Enter Book Name"><br><br>
                 <br>AUTHOR NAME<br>
                 <input type="text" name="auth_name" placeholder="Enter Author Name"><br><br>
                <br>ISBN<br>
                <input type="number" name="isbn_num" placeholder="Enter ISBN number"><br><br>
                <input type="submit" name="del_submit" value="REMOVE BOOK" style='background-color:red;'><br><br>
                  <input type="submit" name="book_submit" value="ADD BOOK">
            </form>
        </div>
    </body>
</hmtl>