<!DOCTYPE html>
<html>
    <head>
        <title>HTML + My SQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="styles.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    
    <body>
    
<div class="row">   
    <div class="col-sm-1", style="background-color: goldenrod">
    </div>     
               
    <div class="col-sm-10", style="background-color: white">
        
        <h2 class="headertekst"> TABLA DE USUARIOS</h2><br>
        <div class="w3-container">
            <table class="w3-table w3-bordered">
                 <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "*myCOOLD4t4b4s3*";
                    $dbname = "rapapp";

                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM Usuarios";
                    $result = $conn->query($sql);
                ?>
                <tr class="w3-red">
                <?php  
                if ($result->num_rows > 0){
                    $all_property = array();  //declare an array for saving property

                    while ($property = mysqli_fetch_field($result)) {
                        echo '<th>' . $property->name . '  </th>';//get field name for header
                        array_push($all_property, $property->name);  //save those to array
                    }
                    echo '<th> Actualizar datos  </th>';
                    echo '<th> Eliminar  </th>';
                    
                    while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    foreach ($all_property as $item) {
                        echo '<td>' . $row[$item] . '</td>'; //get items using property
                    }
                    echo '<th> <form action="./php-database/update.php" method="POST">
                          <div class="form-row">
                            <div class="form-group col-sm-7">
                              <input type="hidden" name="id" value=' . $row["ID"] . '>
                              <input type="email" class="form-control" id="inputCity" placeholder="nuevo@email.com" name="email">
                            </div>

                            <div class="form-group col-sm-5">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                          </div>
                        </form>            
                        </th>';
                    echo '<th> <form action="./php-database/delete.php" method="POST" >
                            <div class="row">
                            <div class="col-sm-12" >
                            <input type="hidden" name="id" value=' . $row["ID"] . '>
                            <button type="submit" class="btn btn-primary"> - </button>
                            </div></div>
                        </form>            
                        </th>';    
                        
                    echo '</tr>';
                        
                        
                }
                }
                else{
                     echo "Ups, se acabaron los elementos";   
                }    
                ?>    
                </tr>
            </table>
        </div>          
        
        <br><br>
        <h3> Registrarse</h3>
        <form action="./php-database/insert.php" method="POST" >
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputEmail4">Nombre</label>
              <input type="text" class="form-control" id="inputEmail4" placeholder="nombre usuario" name="nombre">
            </div>
            <div class="form-group col-md-5">
              <label for="inputPassword4">Email</label>
              <input type="email" class="form-control" id="inputPassword4" placeholder="email" name="email">
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4">Celular</label>
              <input type="text" class="form-control" id="inputPassword4" placeholder="55 1234 5678" name="celular">
            </div>  
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">Dirección</label>
              <input type="text" class="form-control" id="inputCity" placeholder="Calle abc, no 3. Colonia 1" >
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">Estado</label>
              <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>Aguascalientes</option>          
                 <option>Baja California </option>
                 <option>Baja California Sur </option>
                 <option>Campeche 	      </option>
                 <option>Chiapas 	      </option>
                 <option>Chihuahua 	      </option>
                 <option>Ciudad de México </option>
                 <option>Coahuila de Zaragoza 	  </option>
                 <option>Colima 	    </option>
                 <option>Durango 	    </option>
                 <option>Estado de México</option>
                 <option>Guanajuato 	 </option>
                 <option>Guerrero 	     </option>
                 <option>Hidalgo 	     </option>
                 <option>Jalisco 	     </option>
                 <option>Michoacán de Ocampo </option>
                 <option>Morelos 	     </option>
                 <option>Nayarit 	     </option>
                 <option>Nuevo León 	 </option>
                 <option>Oaxaca 	     </option>
                 <option>Puebla 	     </option>
                 <option>Querétaro </option>
                 <option>Quintana Roo 	    </option> 
                 <option>San Luis Potosí 	   </option>
                 <option>Sin Localidad 	     </option>
                 <option>Sinaloa 	     </option>
                 <option>Sonora 	    </option>
                 <option>Tabasco 	    </option>
                 <option>Tamaulipas 	 </option>
                 <option>Tlaxcala 	     </option>
                 <option>Veracruz de Ignacio de la Llave 	 </option>
                 <option>Yucatán 	      </option>
                 <option>Zacatecas</option>

              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Zip code</label>
              <input type="text" class="form-control" id="inputZip" name="zipcode">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Registrar!</button>
        </form> 
    
        <br><br><br><br>
        
    </div>
        
    <div class="col-sm-1", style="background-color: goldenrod">
    </div>
</div>    

    </body>
</html>       