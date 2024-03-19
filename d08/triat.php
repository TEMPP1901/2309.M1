<?php 
//dinh nghia trait t chua cac ham say hello good bye
trait T{
    public function greeting(){
        //set mui gio
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $time=date("H");
        if($time<=11){
        echo "good morning!\n";}
        elseif ($time <=17){
            echo"good afternoon!\n";
        }
        elseif($time<=21){
            echo"good evening!\n";
        }
        else{
            echo "good night!\n";
        }
    }
    public function farewell(){
        echo"good bye !";
    }
}