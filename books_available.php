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
            0%{background-image:url("library1.jpg");color: white;}
            25%{background-image:url("library2.jpg");color: greenyellow;}
            50%{background-image:url("library3.jpg");color: yellow;}
            75%{background-image:url("library4.jpg");color: lightgoldenrodyellow;}
            100%{background-image:url("library1.jpg");color: white;}
        }
         div{
            position: absolute;
            top: 20%;
            overflow: scroll;
            left: 10%;
            background: rgba(0,0,0,0.5);
            width:1200px;
            height:500px;
            border-radius: 20px; 
        }
         table{
             padding:70px 200px;
             color: azure;
         }
         table th{
             background-color: dodgerblue;
             border: 2px solid grey;
             padding:18px 6px;
         }
         table td{
             border: 2px solid white;
             text-align: center;
             padding: 10px 2px;
         }
         p{
             font-size: 40px;
             text-align: center;
         }
         div a{
             position: relative;
             left: 23%;
             top:-10%;
             text-align: center;
             background-color: dodgerblue;
             color:white;
             border-radius: 10px;
             padding: 10px;
             text-decoration: none;
             font-size: 20px;
         }
         div a:hover{
             
             background-color:deeppink;
         }
          </style>
    <header>
        THE LIBRARY MANAGEMENT SYSTEM
    </header>
    <body>
        <div><p>BOOKS AVAILABLE IN OUR LIBRARY</p>
            <a href="home.php">HOME</a>
               <a href="issue.php">ISSUE A bOOK</a>
           <?php
              echo"
            <table>
                <th>BOOK NAME</th>
                <th>AUTHOR NAME</th>
                <th>ISBN</th>
                <th>STATUS</th>
                <th>BOOK HOLDER</th>
                <th>DATE_OF_ISSUE</th>";
            $servername="localhost";
            $username="root";
            $password="";
            $db="library_project";
            
            $conn=new mysqli($servername,$username,$password,$db);
            $sql=$conn->query("select * from books_available");
            if($sql->num_rows>0){
                
                  while($row=$sql->fetch_assoc())
                                    {
          if($row['status']=='available'){
                                    echo "<tr style='background-color:green'>
                                        <td>$row[book_name]</td>
                                        <td>$row[auth_name]</td>
                                        <td>$row[ISBN]</td>
                                        <td>$row[status]</td>
                                        <td>$row[user_name]</td>
                                        <td>$row[date_of_issue]</td>
                                        </tr>";
          }
                      else{
                          echo "<tr style='background-color:crimson'>
                                        <td>$row[book_name]</td>
                                        <td>$row[auth_name]</td>
                                        <td>$row[ISBN]</td>
                                        <td>$row[status]</td>
                                        <td>$row[user_name]</td>
                                        <td>$row[date_of_issue]</td>
                                        </tr>";
          }
                          
                      }
                                    }
                echo " </table>";          
                ?>
            
                </div>
    </body>
</html>