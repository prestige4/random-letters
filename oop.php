<?php
class Random {
    public static function a ( $lenth )
    {
        $charactrs = 'ABCDEFGHIJKLMNOPUQRSTVWXYZ';
        $charLenth = strlen($charactrs);
        $randomString = '';

        for ($i = 0 ; $i < $lenth ; $i++) {
            $randomString .= $charactrs[ rand( 0 , $charLenth -1 ) ]; // (.=) to add new random at the end of the string($rendomString) 
            if ( $i < ($lenth-1) ) {
                $randomString .= '.';
            }
        }// $charactrs[ rand( 0 , 5 ) ] ==> used to choose 5 random charactrs from the string ($charactrs) 
        /// we wrote ( $charLenth -1 ) --> because the count in programing start from 0 not 1 
        return $randomString;
    }
} // end class

$randomString = Random :: a(11) ;
// echo $randomString ;

?>