<html>
  <head>
    <script src="JQuery/jquery-1.12.3.min.js"></script>
    <script>
       function hello(){
         //document.write("Hello World!");
         $().log("Hello World1!");
       }
    </script>
  </head>
  <body>
     <form action="" method="post">
       Email:<input type="text" name="email">
       Password:<input type="password" name="password">
       <input type="submit" name="submit" onclick="hello()">
     </form>
  </body>
</html>
