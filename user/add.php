<?php
include_once("../header.php");  ?>
<div class="content-body">
    <div class="col-12">
  


    
    <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <form method="POST" action="user/addQuery.php"  class="form-sample">
                      <p class="card-description">  </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nome</label>
                            <div class="col-sm-9">
                              <input type="text" name = "name" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Contacto</label>
                            <div class="col-sm-9">
                              <input type="text" name = "contact"  class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">email</label>
							<input type="email" name = "email"  class="form-control" />
                          </div>
                          <br>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">username</label>
                            <div class="col-sm-9">
                              <input  type = "text" class="form-control" name ="username" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <br><br>
                            <input type="password" class="form-control" name ="password" />
                          </div>
                        </div>

                      </div>
					  <br><br>
					  <button type="submit" class="btn btn-sm btn-info"> Salvar</button>



                        </div>
                      </div>
                    </form>
                  </div>
   
                    
     </div>
</div>







	
			
           
					







		

<?php
include_once("../footer.php");  ?>