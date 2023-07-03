<div class="createPortal position-absolute top-50 start-50 translate-middle p-3 bg-white text-dark col-md-3 border border-secondary"  style="z-index:2;display:none; " id="createPort">
    <form action="authentication/actionCode.php" method="POST">
        <h6 class="text-secondary text-center p-2">Create Portal</h6>
        <hr>
        <div class="form-control mt-4">
            <label for="">Portal Name</label>
            <input type="text" name="portalname" id="" class="form-control">
        </div>

        <div class="form-control mt-4">
            <label for="">Set a limiter</label>
            <input type="number" name="numlimiter" id="" class="form-control">
        </div>
        <input type="submit" value="Create" name="submit" class="mt-5 btn btn-primary col-md-12">
    </form>
</div>

<div class="updateform position-absolute top-50 start-50 translate-middle p-3 bg-white text-dark col-md-3 border border-secondary"  style="z-index:2;display:none;" id="updateForm">
<form action="authentication/actionCode.php" method="POST" id="myForm">
        <h6 class="text-secondary text-center p-2">Update Portal</h6>
        <hr>
        <input type="hidden" id="valueField" name="valueField"  value=""/>
      
        <div class="form-control mt-4">
            <label for="">Portal Name</label>
            <input type="text" name="updateportalname" id="nameField" class="form-control" value="">
        </div>

        <div class="form-control mt-4">
            <label for="">Set a limiter</label>
            <input type="number" name="numlimiter" id="limitField" class="form-control" value="">
        </div>
        <input type="submit" value="Update" name="submit" class="mt-5 btn btn-primary col-md-12">
    </form>
</div>

<div class="fileupload position-absolute top-50 start-50 translate-middle p-3 bg-white text-dark col-md-3 border border-secondary" id="fileUpload" style="z-index:2;display:none;">
<form action="authentication/actionCode.php" method="POST" enctype="multipart/form-data" >
        <h6 class="text-secondary text-center p-2">File Upload</h6>
        <hr>
        <input type="hidden" id="fileUploadValue" name="valueField"  value=""/>
        <div class="form-control mt-4">
            <label for="">Full Name</label>
            <input type="text" name="fullname" id="" class="form-control">
        </div>

        <div class="form-control mt-4">
            <label for="">Upload your file</label>
             <input type="file" name="file" id="fileToUpload">
             
        </div>
        <input type="submit" value="FileUpload" name="upload_file" class="mt-5 btn btn-primary col-md-12">
    </form> 
</div>



<!-- Confirmation Dialog Box -->
<div class="deleteitem position-absolute top-50 start-50 translate-middle p-3 bg-white text-dark col-md-3 border border-secondary" id="deleteItem" style="z-index:2;display:none;" tabindex="-1" role="dialog" aria-labelledby="confirmationDialogLabel" aria-hidden="true">
    
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmationDialogLabel">Confirmation</h5>
        
      </div>
      <div class="modal-body">
        Are you sure you want to delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button   class="btn btn-danger"  onclick="deleteItem()">Delete</button>
      </div>
    </div>
  </div>
</div>

