<?php



class Test {

public static function getTest() {

    $db = Db::getConnection();
    $newsList = array();
	
    //возвращаем массив с названиями столбцов в виде ключей
		$result = $db->query('SELECT  `id`, `img`, `name`, `lorem`, `price` FROM `shop`')->fetchAll(PDO::FETCH_ASSOC);
       
     /* $i = 0;
      while($row = $result->fetch()) {
			$newsList[$i]['img'] = $row['img'];
			$newsList[$i]['name'] = $row['name'];
			$newsList[$i]['lorem'] = $row['lorem'];
			$newsList[$i]['price'] = $row['price'];
			$i++;
		}*/

   
		return $result;

     

}


}