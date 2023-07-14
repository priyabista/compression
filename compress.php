<?php
include_once './includes/header.php'; 

include_once './includes/navbar.php'; 

if(!isset($_SESSION['auth'])){
	header('location: login.php');
}
include_once 'includes/overlay.php';
include_once 'dbconfig/dbconfig.php';?>


<style>
    img{
        width: 30px;
        height: 30px;
    }
</style>
<div class="py-5">
    <div class="container">
    <div class="card card-shadow col-md-4 position-absolute top-50 start-50 translate-middle p-4" >
	<h5  id="heading" class="text-center p-2">COMPRESS</h5>
    <hr>
	<div class="bigdiv">
		
		<div class="align mt-3" id="step1">

			<form method="post" enctype="multipart/form-data" class="form" id="fileform">
			<input type="hidden" id="session_id" value="<?php echo $_SESSION['auth_user']['id']; ?>">
            <input type="file" id="uploadfile" class="input form-control">

				<input type="button" id="submitbtn"  class="input btn btn-dark" value="Submit">
			<span id="text1">(.txt files only)</span>
			<br>
			</form>
		</div>
	
		<div class="align mt-5 mb-5" id="step2">
		
			<button type="button" id="encode" class="button btn btn-dark col-md-12" value="submit">COMPRESS</button>
			
			<button type="button" id="decode" class="button" style="display: none;" >DE-COMPRESS</button>
		
			
			<br>
		</div>
		
		<div class="align mt-5 mb-5" id="step3" >

		</div>
		
		<span class="align d-flex justify-content-center" id="text4">
			<button type="button" onclick="location.reload()" class="btn btn-dark" ><i class="fa fa-refresh"></i>
</button>  
		</span>
	</div>
	
    </div>

    </div>
</div>
      

<?php include_once './includes/footer.php'; ?>
    
