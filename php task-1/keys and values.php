<!DOCTYPE html>
<html>
    <body>
        <h2>Displays array keys and values</h2>
        <?php
$ceu = array(
     "Italy"=>"Rome", 
"Luxembourg"=>"Luxembourg",
 "Belgium"=> "Brussels",
 "Denmark"=>"Copenhagen", 
 "Finland"=>"Helsinki", 
 "France" => "Paris",
  "Slovakia"=>"Bratislava",
  "Slovenia"=>"Ljubljana", 
  "Germany" => "Berlin",
   "Greece" => "Athens",
    "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam",
     "Portugal"=>"Lisbon",
      "Spain"=>"Madrid",
       "Sweden"=>"Stockholm",
       "United Kingdom"=>"London",
        "Cyprus"=>"Nicosia", 
        "Lithuania"=>"Vilnius",
         "CzechRepublic"=>"Prague",
         "Estonia"=>"Tallin", 
         "Hungary"=>"Budapest", 
         "Latvia"=>"Riga", 
         "Malta"=>"Valetta",
          "Austria" =>"Vienna",
           "Poland"=>"Warsaw") ;
           asort($ceu);
           foreach($ceu as $country=>$capital)
           {
            echo"The capital of $country is $capital <br>";
        }
        ?>
</body>
</html>