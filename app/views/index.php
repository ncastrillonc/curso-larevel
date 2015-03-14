<!--<html>
    <head>
        <title>Bienvenido a mi página</title>
        <link  rel="stylesheet" href="../../public/assets/css/style.css" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    </head>
    <body >
        <!-- <h1 class="titulo">Bienvenido a mi página</h1>
        <ol>
            <li>Nombre: Nathalie</li>
            <li>Apellido: Charari</li>
            <li>País: Colombia</li>
            <li>Ciudad: Medellín</li>
        </ol><br>          
        
        <h1 class="holi">Ya no cambio de color :(</h1>
        <div>
            <p>Esto es un párrafo 1</p>
            <p>Esto es un párrafo 2</p>
            
            <div>
                <spa>Esto es un span 1</spa>
                <spa>Esto es un span 2</spa>
            </div>
            
        </div>        
        
    </body>
</html> -->

<html>
    <head>
        <link  rel="stylesheet" href="../../public/assets/css/style.css" type="text/css" />
        <link rel="stylesheet" href="../../public/assets/libs/bootstrap/css/bootstrap.min.css" type="text/css">
    </head>
    <body>
<!--<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="#" role="login">
          <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" />
          <input type="email" name="email" placeholder="Email" required class="form-control input-lg" value="joestudent@gmail.com" />
          
          <input type="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
            <a href="#">Create account</a> or <a href="#">reset password</a>
          </div>
          
        </form>
        
        <div class="form-links">
          <a href="#">www.website.com</a>
        </div>
      </section>  
      </div>
      
      <div class="col-md-4"></div>
  </div>
  
  <p>
    <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fbootsnipp.com%2Fiframe%2FW00op" target="_blank"><small>HTML</small><sup>5</sup></a>
    <br>
    <br>
    
  </p>-->  

        <!-- Maquetar Página --> 
        <div class="container">
            <div class="row">
                <!-- A -->
                <nav class="navbar navbar-default">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">Brand</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                          </ul>
                        </li>
                      </ul>
                      <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                      </form>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    B
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="row">
                                <!-- C -->
                                <form class="form-horizontal">
                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                      <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                      <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox"> Remember me
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Sign in</button>
                                      </div>
                                    </div>
                                  </form>
                            </div> 
                            <div class="row">
                                D
                            </div> 
                        </div>
                        <div class="col-sm-4 col-sm-offset-1">
                            <div class="row">
                                <!-- E -->
                                <!-- Standard button -->
                                <button type="button" class="btn btn-default">Default</button>

                                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                <button type="button" class="btn btn-primary">Primary</button>

                                <!-- Indicates a successful or positive action -->
                                <button type="button" class="btn btn-success">Success</button>

                                <!-- Contextual button for informational alert messages -->
                                <button type="button" class="btn btn-info">Info</button>

                                <!-- Indicates caution should be taken with this action -->
                                <button type="button" class="btn btn-warning">Warning</button>

                                <!-- Indicates a dangerous or potentially negative action -->
                                <button type="button" class="btn btn-danger">Danger</button>

                                <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                                <button type="button" class="btn btn-link">Link</button>
                            </div> 
                            <div class="row">
                                <!-- F -->
                                <form class="form-horizontal">
                                    <div class="form-group has-success has-feedback">
                                      <label class="control-label col-sm-3" for="inputSuccess3">Input with success</label>
                                      <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputSuccess3" aria-describedby="inputSuccess3Status">
                                        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                        <span id="inputSuccess3Status" class="sr-only">(success)</span>
                                      </div>
                                    </div>
                                    <div class="form-group has-success has-feedback">
                                      <label class="control-label col-sm-3" for="inputGroupSuccess2">Input group with success</label>
                                      <div class="col-sm-9">
                                        <div class="input-group">
                                          <span class="input-group-addon">@</span>
                                          <input type="text" class="form-control" id="inputGroupSuccess2" aria-describedby="inputGroupSuccess2Status">
                                        </div>
                                        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                        <span id="inputGroupSuccess2Status" class="sr-only">(success)</span>
                                      </div>
                                    </div>
                                  </form>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>