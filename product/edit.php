<?php
include_once("../db.php"); 
include_once("../header.php");  

	$id = $_GET['id'];
	// faz a seleção do dados na Tabela	
		$query = mysqli_query($conectar, "SELECT * FROM products WHERE id = '$id' LIMIT 1");
		$result = mysqli_fetch_assoc($query);
		
		/*PDO 
		$stmt = $pdo_conn->prepare("SELECT * FROM posts where id=" . $_GET["id"]);
		$stmt->execute();
		$result = $stmt->fetchAll();
		*/

?>

<div class="content-body">
    <div class="col-12">
  




                      
			
            <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <form method="POST" action="product/editQuery.php"  class="form-sample">
				              	<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
                      <p class="card-description">  </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">codigo</label>
                            <div class="col-sm-9">
                              <input type="text" name = "cod" value="<?php echo $result['cod'];  ?>"  class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nome</label>
                            <div class="col-sm-9">
                              <input type="text" name = "name" value="<?php echo $result['name']; ?>" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Preço</label>
							          <input type="number" maxlength="10" name = "price" value="<?php echo $result['price']; ?>"  class="form-control" />
                          </div>
                        </div>
					  <br><br><br><br>
					  <button type="submit" class="btn btn-sm btn-info"> Editar</button>



                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
</div>







		 </div>
			
           
					







		

<?php
include_once("../footer.php");  ?>