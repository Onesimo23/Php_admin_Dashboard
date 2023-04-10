<?php
include_once("../header.php");  ?>
<div class="content-body">
    <div class="col-12">
  


    
    <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <form method="POST" action="product/addQuery.php"  class="form-sample">
                      <p class="card-description">  </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Codigo</label>
                            <div class="col-sm-9">
                              <input type="text" name = "cod" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nome</label>
                            <div class="col-sm-9">
                              <input type="text" name = "name"  class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">preço</label>
							<input type="number" name = "price"  class="form-control" />
                          </div>
                          <br>
                        </div>
                       
					  <br>
					  <button type="submit" class="btn btn-sm btn-info" > Salvar</button>



                        </div>
                      </div>
                    </form>
                  </div>
   
                    
     </div>
</div>







	
			
           
					







		

<?php
include_once("../footer.php");  ?>