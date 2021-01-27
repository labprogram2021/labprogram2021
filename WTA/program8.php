<html>
    <head>
        <style>
            table,th,tr{
                border: 2px solid black;
                background-color: burlywood;
                text-align: center;
                width: 35%;
            }
            table{margin: auto;}
            input{text-align: right;}
        </style>
    </head>
    <body>
     <form method="POST">
         <table>
             <tr>
                 <th colspan="2">simal calucalter</th>
             </tr>
             <tr>
                 <td>Input1:</td>
                 <td><input type="text" name="num1"></td>
             </tr>
             <tr>
                <td>Input2:</td>
                <td><input type="text" name="num2"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit"name="submit" value="Calucate"> Calucate</td>
            </tr>
         </table>
     </form>
     <?php
     if(isset($_POST["submit"]))
     {
         $num=$_POST["num1"];
         $num2=$_POST["num2"];
         if(is_numeric($num)){
             echo "<table>";
             echo"<tr><td>Addtion</td><td><p>".($num+$num2)."</p></td></tr>";
             echo"<tr><td>subsction</td><td><p>".($num-$num2)."</p></td></tr>";
             echo"<tr><td>Multiplication</td><td><p>".($num*$num2)."</p></td></tr>";
             echo"<tr><td>Division</td><td><p>".($num/$num2)."</p></td></tr>";
             echo "</table>";
         }else{
             echo "<script type='text/javascript'> alert('Enter valid INPUT')</script>";
         }
     }?>
    </body>
</html>