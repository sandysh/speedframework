<!DOCTYPE html>
<html>
<head>
    <title><?php echo e($title); ?></title>
    <?php load_css('app'); ?>
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
    <center><h1><?php echo e($body); ?></h1></center>
    
    <div class="col-md-5 col-md-offset-3" style="margin-top:20px">
        <form class="form-horizontal" method="POST" action="test/post">
            @csrf()
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
    <?php load_js('app'); ?>
</body>
</html>