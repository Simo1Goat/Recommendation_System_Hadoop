<!DOCTYPE html>

<html>
    <head>
        <title>Recommendation System</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css" type="text/css"/>

        <style>
            body{
                background-image:url("backgrund.jpg");
                color:#000000;
            }
            .aa{ width:415px; height:350px; border-radius:25px;
                    background-color:rgba(0,0,0,0.5); margin-top: 80px;padding-top: 40px;}
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
       
        <div class="col-sm-12">
                       
            
        </div>
      
        <div class="aa  container-fluid " style="">
            
            <div class="row">
                <div class="col-md-10 rounded">
                
                        <h2 class="text-center" style="color:white;">Login</h2>
                        <form class="form-horizontal" action="userLogin" method="POST">
                            
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-10">
                                <label style="color:white">UserID (1-943)</label>
                                </div>
                                <div class="col-sm-offset-3 col-sm-10">
                                <input type="text" name="uid">
                                </div>
                            </div>
                            
                            
                          <div class="form-group"> 
                            <div class="col-sm-offset-3 col-sm-10">
                              <button type="submit" class="btn btn-inverse" style="color:black;">Submit</button>
                            </div>
                          </div>
                           
                        </form>
                         
                </div>
                        
            </div>
        </div>
    </body>
</html>
