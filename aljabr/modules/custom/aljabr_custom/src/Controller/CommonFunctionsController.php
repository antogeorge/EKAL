<?php
/**
* @file
* contains \Drupal\aljabr_custom\Controller\CommonFunctionsController
*/
 namespace Drupal\aljabr_custom\Controller;

 use Drupal\Core\Controller\ControllerBase;

 use Symfony\Component\HttpFoundation\JsonResponse;

 
 class CommonFunctionsController extends ControllerBase {
    
 
  public static function generateKey($id) {
    $mykey = '3X7AiNUX';
    $key = hash('sha512',$id.$mykey); //echo $key;
    return $key;
    
  }

  public static function validateKey($urlvar, $pgvar) {
    
    if($pgvar != "" || $urlvar != "")
    {
      if($pgvar != $urlvar)
      {
        return false;
      }else {
        return true;
      }
    }else {
      return false;
    }
  }


  public static function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
  }


  public static function hideMobile($mob) {
        //alert(mob);
        $mobno=$mob;

        $moblen=strlen($mobno);

        $last2=substr($mobno, -2);    // returns last 2 digits
        $trim=$moblen-2;
        $trimmob='';
        
        for($i=0;$i<$trim;$i++){
            $trimmob .= 'x';
        }

        $res=$trimmob . $last2;
        // $( "#mobno" ).replaceWith('<div id="mobno">'+res+'</div>');
        return $res;
  
    }


  public static function formatNum($val){
    //if(!empty($val) && !is_numeric($val)){
      $dec=strlen(substr(strrchr($val, "."), 1));
      $num=number_format($val, $dec, '.', ',');
        if($num == 0) {
          return '';
        } else if (strpos($num, '.') !== false) {
          $afterdec = self::strafter($num,'.');
          $twodec = substr($afterdec, 0, 10);
          $beforedec = self::strbefore($num,'.');

          return $beforedec . '.' . $twodec;
        } else {
          return $num;
        }       
      }
      
    //}else{
      //return '-';
    //}

  public static function formatDate($val){
    if(!empty($val)){
      $date = strtotime($val);
      $fdate=date('d-m-Y',$date);
      return $fdate;
    }else{
      return '';
    }
  }

  public static function checkNull($val){
    if(!empty($val)){
      return $val;
    }else{
      return '';
    }
  }

  public static function strafter($string, $substring) {
    $pos = strpos($string, $substring);
    if ($pos === false)
     return $string;
    else  
     return(substr($string, $pos+strlen($substring)));
  }

  public static function strbefore($string, $substring) {
    $pos = strpos($string, $substring);
    if ($pos === false)
     return $string;
    else  
     return(substr($string, 0, $pos));
  }

}