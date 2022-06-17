<?php
require 'nusoap/lib/nusoap.php';

$client = new nusoap_client("http://localhost/IT140P/service.php?wsdl"); // Create a instance for nusoap client

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SOAP Web Service Client Side Demo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>SOAP Web Service Client Side</h2>
  <form class="form-inline" action="" method="POST">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" size="25" class="form-control"  placeholder="Please Enter Student name" required/>
      <label for="code">Student Number</label>
      <input type="text" name="code" size="28" class="form-control"  placeholder="Please Enter Student number" required/>
    </div>
    <input type="submit" name="submit" class="btn btn-default"></input>
  </form>
  <h3>

  <?php
	if(isset($_POST['submit']))
	{ 
		$name =  $_POST['name'];
                $code =  $_POST['code'];

    $response = $client->call('get_count',array("name"=>$name,"code"=>$code));
		if(empty($response))
			echo "No data to extract from the SOAP Response";
		else
			echo $response;

          echo "<h2>Request</h2>";
	        echo "<pre>" . htmlspecialchars($client->request, ENT_QUOTES) . "</pre>";
          echo "<h2>Response</h2>";
          echo "<pre>" . htmlspecialchars($client->response, ENT_QUOTES) . "</pre>";
          
	}
   ?>


  </h3>
</div>

</body>
</html>