<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
</head>
<body>


      <form id="addform" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user-circle-o"
                    aria-hidden="true"></i>
              </div>
              <input type="text" class="form-control" id="username" name="username" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Email:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o"
                    aria-hidden="true"></i></span>
              </div>
              <input type="email" class="form-control" id="email" name="email" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Phone:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"
                    aria-hidden="true"></i></span>
              </div>
              <input type="phone" class="form-control" id="phone" name="phone" required="required" maxLength="10"
                minLength="10">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Photo:</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01"><i class="fa fa-picture-o"
                    aria-hidden="true"></i></span>
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="photo" id="userphoto">
                <label class="custom-file-label" for="userphoto">Choose file</label>
              </div>
            </div>

          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" id="addButton">Log in</button>
          
<!-- 
          <input type="hidden" name="action" value="adduser">
          <input type="hidden" name="userid" id="userid" value=""> -->
        </div>
      </form>
<!-- add/edit form modal end -->

<script src="Publics/js/jquery.js"></script>
<script src="Publics/js/bootstrap.js"></script>
 <script src="Publics/js/main.js"></script> 
</body>
</html>

