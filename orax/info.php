<?php
error_reporting(E_ERROR | E_PARSE);

 
$ad_source="4san 0568430828";

$logo_h='100px';
$logo_w='20px';
//echo $ad_source;







try {



    $items = array();



$handle = fopen("services/logix_modules.txt", "r");
if ($handle) {
$i=0;
    while (($line = fgets($handle)) !== false) {
        //echo $line."<br>".$i; 
$i++;
$items['Peter'.$i]=$line;


    }

    fclose($handle);
}









$info = array(

    

    "website_title"=>"    الحلول الذهبية لأعمال الحاسب الآلي  ",
     "sub1"=>"      الحمزة للسيارات  ",
    "sub2"=>"أفضل عروض شانجان - شانجان جديدة بأفضل سعر   
      ",

    "counter_message"=>"     احجز قبل انتهاء العداد للحصول على العروض          ",



 "sidebar1_msg"=>"عروض   العيد  ",
 "sidebar2_msg"=>"  تجهيزات باحدث التقنيات     ",
 "sidebar3_msg"=>"     2  كادر طبي متميز       ",

    "form_sub1"=>"               ",
    "form_sub2"=>"      ",


 
    "ev_logo_name"=>"    
    
    الحلول الذهبية لأعمال الحاسب الآلي

    ",


    
    "ev_form_sub1"=>"    
  
    املئ النموذج 
    ",


    "ev_form_sub2"=>"    
    واحصل على نسختك التجريبية الان 

    ",


    
    "lt_sub1"=>"    
    
    الحلول الذهبية لتقنية نظم المعلومات مزود فاتورة الكترونية معتمدة من هيئة الزكاة والدخل 
   
    ",


    "lt_sub2"=>"    




 

 
    ",




);


//echo "Peter is " . $age['Peter'] . " years old.";













$cats1 = array(

    "item0"=>"نساء   ",

    "item1"=>"رجال",
 





);


    
  } catch(Exception $e) {
    
  }





















 





?>