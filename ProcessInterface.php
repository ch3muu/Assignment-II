<?php

interface ProcessInterface {
    function Conn();
    function Submit($userId,$Full_Name,$email,$phone_Number,$User_Name,$Password);
}


?>