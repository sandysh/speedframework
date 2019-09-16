<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            App
            <!-- <img alt="Brand" src="..."> -->
          </a>
        </div>
      </div>
    </nav>
    <div class="col-md-5 col-md-offset-3" style="margin-top:20px">
        <form class="form-horizontal" method="GET" action="test/post">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name="submit" class="btn btn-default" value="submit">Sign in</button>
            </div>
          </div>
        </form>     
    </div>    
</body>
</html>