<?php
class SQLDriver {
  static $dbHost = 'localhost';
	
	static $dbUser = 'root';
	static $dbPass = '';
	
	static $dbName = 'desafio';
	
	private static $PDOInstance;

	public static function getPDO()
	{
        if (self::$PDOInstance === NULL) {
			self::$PDOInstance = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbPass);
        }
        return self::$PDOInstance;
	}

	public static function selectAllEntities($tableName, $class) {
		$stmt = self::getPDO()->prepare("SELECT * FROM " . $tableName);
    
        if ($stmt->execute()){
          return $stmt->fetchAll(PDO::FETCH_CLASS, $class);
        }
	}

	public static function insertPersonagem($nome, $idade, $atores, $alinhamento, $bio){
		$stmt = self::getPDO()->prepare("INSERT INTO personagens (nome, idade, interprete, alinhamento, biografia) VALUES (:nome, :idade, :interprete, :alinhamento, :biografia)");
        
		$stmt->bindParam(":nome", $nome);
		$stmt->bindParam(":idade", $idade);
		$stmt->bindParam(":interprete", $atores);
		$stmt->bindParam(":alinhamento", $alinhamento);
		$stmt->bindParam(":biografia", $bio);
	
		if (!$stmt->execute()){
			self::getPDO()->rollBack();
		}
	}

}
?>
