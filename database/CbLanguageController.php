<?php 


class CbLanguageController {
	var $cdb = null;

	public function readAll() {
		$query = "SELECT * FROM cb_language";
		$statement = $this->cdb->prepare($query);
		$statement->execute();
		$rows = $statement->fetchAll(\PDO::FETCH_OBJ);
		return $rows;
	}

	public function create($idlanguage, $namelanguage, $isactive, $languageiso, $countrycode, $isbaselanguage, $issystemlanguage){ 
	    $sqlInsert = "INSERT INTO cb_language(idlanguage, namelanguage, isactive, languageiso, countrycode, isbaselanguage, issystemlanguage)"
	             . "    VALUES ('".$idlanguage."', '".$namelanguage."', '".$isactive."', '".$languageiso."', '".$countrycode."', '".$isbaselanguage."', '".$issystemlanguage."')";
	    try {             
	        $this->cdb->exec($sqlInsert);      
	    } catch (PDOException $pdoException) {            
	        echo 'Error crear un nuevo elemento cb_language en create(...): '.$pdoException->getMessage();
	        exit();
	    }
	}

	public function update($idlanguage, $namelanguage, $isactive, $languageiso, $countrycode, $isbaselanguage, $issystemlanguage){        
	    $sqlUpdate = "UPDATE cb_language "
	            . "     SET namelanguage    = '".$namelanguage."', "
	            . "         isactive        = '".$isactive."', "
	            . "         languageiso     = '".$languageiso."', "
	            . "         countrycode     = '".$countrycode."', "
	            . "         isbaselanguage  = '".$isbaselanguage."', "
	            . "         issystemlanguage = '".$issystemlanguage."'"
	            . "     WHERE   idlanguage  = '".$idlanguage."'";
	    try {                         
	        $this->cdb->exec($sqlUpdate);      
	    } catch (PDOException $pdoException) {            
	        echo 'Error actualizar un nuevo elemento cb_language en update(...): '.$pdoException->getMessage();
	        exit();
	    }
	}

	public function delete($idlanguage){ 
	    $sqlDelete = 
	        "DELETE FROM cb_language"
	        . "     WHERE   idlanguage = '".$idlanguage."'"; 
	    try {             
	        $this->cdb->exec($sqlDelete);      
	    } catch (Exception $exception) {            
	        echo 'Error al eliminar un idioma en la función delete(...): '.$exception->getMessage();
	        exit();
	    }
	}
}
?>