<?php 
	session_start();
	include_once("../db.php");
	include_once("../header.php");
?>	
  <!-- Content Wrapper. Contains page content -->
 
  <div class="content-body">
    <div class="col-12">
  



 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
		 <!-- INICIO -->

    
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						Ediçao Efectuada com sucessso.
                </div>
		        <div class="text-center">
				  <a href="user/index.php"><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Voltar</button></a>
			   </div>
		 <!-- FIM -->
        
      </div><!-- /.container-fluid -->
    </section>
  
    </div>  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
 
                
 
  <?php include_once("../footer.php");  ?> 