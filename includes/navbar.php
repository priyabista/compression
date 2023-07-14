<?php 

$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/") + 1);

?>


<nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white  border-bottom">
 
 <div class="container-fluid">
 


  
   <a class="navbar-brand " href="index.php" style="<?= $page == "index.php" ?'border:2px solid black;padding:5px 10px 5px 10px;border-radius:10px;  ':'';  ?>">
       <h5>File Uploader</h5>
   </a>


   <!-- Right links -->
   <ul class="navbar-nav ms-auto d-flex flex-row" style="margin-right: 50px;">
  <?php 

  if(isset($_SESSION['auth_user'])){ ?>

    <li class="nav-item me-3 me-lg-0">
    <a class="nav-link  <?= $page == "compress.php" ?'active rounded bg-dark text-light ':'';  ?>" href="compress.php">
    <span><i class="fa-sharp fa-solid fa-file-zipper" style="margin-right: 5px;"></i>Compress</span>
    </a>
    </li>
    <li class="nav-item me-3 me-lg-0">
    <a class="nav-link <?= $page == "decompress.php" ?'active rounded bg-dark text-light ':'';  ?>" href="decompress.php">
    <span><i  class="fa-solid fa-file" style="margin-right: 5px;"></i>Decompress</span>
    </a>
    </li>

    <li class="nav-item me-3 me-lg-0">
    <a class="nav-link <?= $page == "history.php" ?'active rounded bg-dark text-light  ':'';  ?>" href="history.php">
    <span><i  class="fa-solid fa-clock-rotate-left" style="margin-right: 5px;"></i>  History</span>
    </a>
    </li>



            <li class="nav-item dropdown">
            <a href="" class="nav-link text-black dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
            <img
            src="https://sm.ign.com/ign_nordic/cover/a/avatar-gen/avatar-generations_prsz.jpg"
            class="rounded-circle"
            height="22"
            alt="Avatar"
            loading="lazy"/></a>
            <ul class="dropdown-menu">
            <li>
            <a class="dropdown-item" href="#">My profile</a>
            </li>
            <li>
            <a class="dropdown-item" href="#">Settings</a>
            </li>
            <li>
            <a class="dropdown-item" href="logout.php">Logout</a>
            </li>
            </ul>
            </li>

 <?php  }else{ ?>

     <!-- Icon -->
     <li class="nav-item">
       <a class="nav-link me-3 me-lg-0" href="login.php">
         <span><i class="fa-solid fa-right-to-bracket" style="margin-right: 5px;"></i>Log in</span>
       </a>
     </li>
     <!-- Icon -->
     <li class="nav-item me-3 me-lg-0">
       <a class="nav-link" href="signup.php">
         <span><i class="fa-solid fa-user-plus" style="margin-right:5px ;"></i>Sign up</span>
       </a>
     </li>

 <?php }
  ?>






   </ul>
 </div>

</nav>
 


 
