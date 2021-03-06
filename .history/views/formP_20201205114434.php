<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>inscrire</title>
</head>
<body>

<!-- add/edit form modal -->
<div class="modal fade modalConnect" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Se connecter <i class="fa fa-user-circle-o" aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="addform" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nom" class="col-form-label">NOM:</label>
            <input type="text" class="form-control" id="nom" name="nom" required="required">
          </div>
          <div class="form-group">
            <label for="prenom" class="col-form-label">PRENOM:</label>
            <input type="text" class="form-control" id="prenom" name="prenom">
          </div>
          <div class="form-group">
            <label for="niveau" class="col-form-label">Niveau:</label>
            <input type="text" class="form-control" id="niveau" name="niveau" required="required">
          </div>
          <div class="form-group">
            <label for="num_inscription" class="col-form-label">NUMERO D'INSCRIPTION:</label>
            <input type="text" class="form-control" id="num_inscription" name="num_inscription" required="required">
          </div>
          <!-- <div class="form-group">
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

          </div> -->

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
          <button name="btnConnecter" class="btn btn-success" id="addButton">Connecter</button>
          <a href="inscrire" class="btn btn-primary connecter " id="inscrire">
               <i class="glyphicon glyphicon-log-in"></i> Log In 
          </a>


          <!-- <input type="hidden" name="action" value="adduser">
          <input type="hidden" name="userid" id="userid" value=""> -->
        </div>
      </form>
    </div>
  </div>
</div>
<!-- add/edit form modal end -->
<script src="Publics/js/jquery.js"></script>
<script src="Publics/js/bootstrap.js"></script>
 <script src="Publics/js/main.js"></script> 
 <script src="../Publics/js/main.js"></script> 
</body>
</html>
