<?php



class Cart {

public static function getCart($id) {

    $db = Db::getConnection();
    $newsList = array();
	  
    //возвращаем массив с названиями столбцов в виде ключей
		$result = $db->query('SELECT * FROM `shop` WHERE id='. $id)->fetch(PDO::FETCH_ASSOC);
	
   
		return $result;

     

}


}