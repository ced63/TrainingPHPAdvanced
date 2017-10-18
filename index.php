<?php


//EXO 4
// masquer les erreurs qui vienne de php, afficher que celle qu on veut apres
//
//error_reporting(0);
//
///**
// * @param $errno
// * @param $errmsg
// * @param $filename
// * @param $linenum
// * @param $vars
// */
//
//function userErrorHandler($errno, $errmsg, $filename, $linenum, $vars)
//{
//    $error = [
//        'no' => $errno,
//        'msg' => $errmsg,
//        'file' => $filename,
//        'line' => $linenum,
//    ];
//
//    echo var_dump($error) . "\n";
//
////    debug_print_backtrace();
//}
//
//// le second parametre defini celui qu'on veut intercepter
//set_error_handler('userErrorHandler', E_ALL);
//
//require 'vendor/autoload.php';
//
//
//use Smile\Training\Format as myFormat;
//use Smile\Training\CarFactory;
//
//
////EXO 1
////$myFormat = new myFormat();
////
////$myFormat->test();
//
//
////EXO 2
////$myCar = CarFactory::makeCar('tesla');
////
////echo $myCar->getBrand();
//
//
//// EXO 3
////ob_start();
////phpinfo();
////$content = ob_get_clean();
////// recupere le contenu
////echo str_ireplace('PHP', 'WAZAAAA',$content);
////ob_end_flush();
//
//
////EXO 4
////echo $rien;
////$a = NOT_DEFINED;
////
////trigger_error("This is an trigerred notice.", E_USER_NOTICE);
////trigger_error("This is an trigerred warning.", E_USER_WARNING);
////trigger_error("This is an trigerred error.", E_USER_ERROR);
//
//
////EXO 5
//function divide($number, $divideBy)
//{
//    if ($divideBy === 0) {
//        throw new DivisionByZeroError('Deny 0 for divide');
//    }
//    return $number / $divideBy;
//}
//
//
//try {
//    divide(10, 0);
//    divide(5,2);
//
//} catch (Exception $e) {
//    echo "Catch an exception: " . $e->getMessage() . "\n";
//} catch (DivisionByZeroError $e) {
//    echo "Caught a division by Zero: " . $e->getMessage() . "\n";
//} finally {
//    echo "The final countdown". "\n";
//}
//echo "This is the end". "\n";

$timeA = new DateTime();
$timeB = new DateTime();

$timeB->setTimezone(new DateTimeZone('Asia/Tokyo'));
//$timeB->sub(new DateInterval("PT7H"));


echo 'Paris: '. $timeA->format('d-m-Y H:i:s');
echo '<br>Tokyo: '. $timeB->format('d-m-Y H:i:s');

echo '<br>égalité';
var_dump($timeA == $timeB);

echo '<br>A > B';
var_dump($timeA > $timeB);

echo '<br>A < B';
var_dump($timeA < $timeB);
