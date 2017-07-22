<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <script src="/JQuery/jquery-2.2.0.min.js"/>
        <script>
            function getData(){

                var methodUrl='/rest/ws/user/';
                 $.ajax({
                     url:methodUrl,
                     type:"POST",
                     data:$("#ajaxForm").serialize();
                     success:function(data){
                       $("#target").text(data);
                     }
                     error:function(e){

                     }
                 });
            }
        </script>
    </head>
    <body>
        <h1>Login</h1>
        <form method="post" id="ajaxForm" method="post" action="/rest/ws/user/">
            Email:<input type="text" name="EmailId" placeholder="username" id="emailid"/>
            <br><br>
            Password:<input type="password" name="password" placeholder="password" id="password"/>
            <br>
            <input type="submit" value="ajaxsubmit" onclick="getData()"/>
        </form>

        <span id="target"></span>
    </body>
</html>
