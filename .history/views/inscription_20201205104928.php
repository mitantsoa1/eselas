<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <link rel="stylesheet" href="Publics/css/bootstrap.min.css">
    <link rel="stylesheet" href="Publics/css/font-awesome.min.css">
    <link rel="stylesheet" href="Publics/css/style.css">
</head>
<body>

<div class="container containerInscription">
      <form id="addform" method="POST" enctype="multipart/form-data" action="confirmInscript">
       
          <div class="form-group">
            <label for="nom" class="col-form-label">NOM:</label>
            
              <input type="text" class="form-control" id="nom" name="nom" required="required">
          
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Email:</label>
            <div class="form-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
              </div>
              <input type="email" class="form-control" id="email" name="email" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Phone:</label>
            <div class="form-group ">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
              </div>
              <input type="phone" class="form-control" id="phone" name="phone" required="required" maxLength="10" minLength="10">
            </div>
          </div>
          <!-- <div class="form-group">
            <label for="message-text" class="col-form-label">Photo:</label>
            <div class="form-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="photo" id="userphoto">
                <label class="custom-file-label" for="userphoto">Choose file</label>
              </div>
            </div>

          </div> -->

          <button class="btn btn-success " name="btnInscription" id="btnInscription">Log in</button>
          
<!-- 
          <input type="hidden" name="action" value="adduser">
          <input type="hidden" name="userid" id="userid" value=""> -->
     
      </form>
<!-- add/edit form modal end -->
</div>
<script src="Publics/js/jquery.js"></script>
<script src="Publics/js/bootstrap.js"></script>
 <script src="Publics/js/main.js"></script> 
</body>
</html>

