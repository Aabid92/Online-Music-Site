<html>
<head>
    <title>User Login and Registration Form</title>
    <link rel="stylesheet" type="text/css" href="log.css"/>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
    
    <h1 style="color:75daad; text-align:center; background-color:white;background-color: transparent;background-color: rgba(255, 255, 255, 0.47);">Welcome To World Of Music</h1>  
    <h3 style="color: white; text-align: center;">Explore the best music experience ever <b style="color: yellow">Login</b> below To enjoy</h3>        
        
    <div class="container">
       <div class="login-box"> 
    <div class="row">
        
        <!Login Form-->
        
        <div class="col-md-6 login-L" >
            <h2>Login Here</h2>
            <form action="validation.php" method="post">
            <div class="form-group">
            <label>Username</label>
                <input type="text" name="user" class="form-control"required>
            </div>
                
            
            <div class="form-group">
            <label>Password</label>
                <input type="password" name="password" class="form-control"required>
            </div>
            <button type="submit"  class="btn btn-primary">Login</button>   
            </form>
            
            </div>
        
            <!Registration Form-->  
        
            <div class="col-md-6 login-R" >
            <h2>Register Here</h2>
            <form action="register.php" method="post">
            <div class="form-group">
            <label>Username</label>
                <input type="text" name="user" class="form-control"required>
            </div>
                
            
            <div class="form-group">
            <label>Password</label>
                <input type="password" name="password" class="form-control"required>
            </div>
            <button type="submit"  class="btn btn-primary">Register</button>   
            </form>
            
            </div>
            
            
        </div>
           </div>
        
        </div>
        
        
    </body>
</html>