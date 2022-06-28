<?php 
    try
    {
        $uid = $_POST['uid'];
    

        $dbh = new PDO("mysql:host=localhost;dbname=recomsys","root","");
        $requete = "SELECT DISTINCT * FROM `users` WHERE uid = ?";

        $pdostat = $dbh->prepare($requete);
        $pdostat->execute([$uid]);

        $dbh->query($requete);
        $result = $pdostat->fetch(PDO::FETCH_ASSOC);
        if($pdostat->rowCount())
        {
            $uid = $result['uid'];
            $age = $result['age'];
            $occupation = $result['occupation'];
            $zip = $result['zip'];
            $gender = $result['gender'];
        }
        $dbh = null;
    }
    catch(PDOException $e)
    {
        echo "<p>".$e->getMessage()."</p>";
        die();
    }


?>

<html>
<head>
		<meta charset="UTF-8">
		<title>Welcome User</title>
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

            h1, h3
            {
                color:white;
            }
            
			a{
				color:black;
			}

			.bb {
    
			    background-color: rgba(0,0,0,0.5);
			    margin-top: 10px;
			    padding-top: 0px;
			    margin-left: 150px;
			}
			
			.cc{  
                    background-color:rgba(0,0,0,0.5); margin-top: 10px;padding-top: 0px;margin-left: 150px;
              }
        </style>
</head>
<body>

	<h1>Welcome User : <?php echo $uid;?></h1>
		<h3>Your Details</h3>
		<table style="width:75%; margin-left: 140px; color:white;">
	  		<thead class="thead-inverse">
	    			<tr>
	      				<th>Age</th>
	      				<th>Gender</th>
	      				<th>Occupation</th>
						<th>Zip Code</th>
	   			 </tr>
	  		</thead>
	  		<tbody>
				<tr>
						<td> <?php echo  $age; ?></td>
	      				<td> <?php echo $gender;?></td>
	      				<td> <?php echo $occupation;?></td>
						<td> <?php echo $zip;?></td>			
				</tr>
			</tbody>
  		</table>
  		
    <div  style="height:100%; width:50%;position:absolute">
        <h3 style="margin-top: 70px; margin-left: 200px; margin-bottom: 20px;">recommended movies</h3>
            
        <table class="table" style="width:75%; margin-left: 140px; color:white;">
            <thead class="thead-inverse">
                <tr>
                <th>#MovieID</th>
                <th>Movie Title</th>
                </tr>
            </thead>
            <?php
                $dbh = new PDO("mysql:host=localhost;dbname=recomsys","root","");
                $requete = "SELECT * FROM `content` WHERE uid = ?";
                $pdostat = $dbh->prepare($requete);
                $pdostat->execute([$uid]);
                while($array = $pdostat->fetch(PDO::FETCH_ASSOC)):
                    $user = $array['uid'];
                    $item = $array['itemid'];
            ?>
            <tbody>

                    
                <td><?php echo $item?></td>
                <?php $filmtitle = "SELECT * FROM `items` WHERE itemid = ?";
                      $new = $dbh->prepare($filmtitle);
                      $new->execute([$item]);  
                      while($tableau = $new->fetch(PDO::FETCH_ASSOC)):
                ?>
                <td><?php echo $tableau['itemtitle']; break;?></td>
                <?php endwhile;?>
            </tbody>
            <?php endwhile;?>  
        </table>
    </div>

	
</body>
</html>