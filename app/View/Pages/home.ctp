<html>
<head>
<style type="text/css">
body {
	background-image:
		url("http://localhost/mtinfo/app/webroot/images/loginBg.jpg");
}
</style>
</head>
<body style="width: 500px; height: 200px; margin-top: 140px; margin-left: 395px">
	<form action="/mtinfo/users/login" id="UserLoginForm" method="post" accept-charset="utf-8"
        	class="navbar-form navbar-right" role="form">
        	<input type="hidden" name="_method" value="POST"/>
            <div class="form-group">
              <input name="data[User][username]" class="form-control" maxlength="50"
              	type="text" id="UserUsername" required="required" placeholder="Email"/>
            </div>
            <div class="form-group">
            	<input name="data[User][password]" placeholder="Password" type="password"
            		id="UserPassword" required="required" class="form-control"/>
            </div>
            <button type="submit" class="btn btn-success">Entrar</button>
          </form>
</body>
</html>
