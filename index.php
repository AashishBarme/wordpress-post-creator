

<html>
 <head>
  <title>XML to WP Post Creator</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 </head>
 <body> 
    <div class="container">
      <div class="row">
            <form action="output.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="xmlfile">Example file input</label>
                <input type="file" name="xmldata" class="form-control-file" id="xmlfile">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>   
        </div>
    </div>         
 </body>
 </html>
