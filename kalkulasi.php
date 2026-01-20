<?php
function cek_data($data){
    if(isset($_GET[$data])){
        if($_GET[$data] == NULL){
            return 0;
        }else{
            return $_GET[$data];
        }
    }else{
        return 0;
    }
}

function celcius(){
    if(cek_data("dor") == "Hitung_C"){
        return cek_data("celcius");
    }else if(cek_data("dor") == "Hitung_F"){
        return (cek_data("Farenheit") - 32) * 5/9;
    }else if(cek_data("dor") == "Hitung_K"){
        return cek_data("kelvin") - 273;
    }else if(cek_data("dor") == "Hitung_R"){
        return cek_data("reamur") * 5/4;
    }
}

function farenheit(){
    return (celcius() * 9/5) + 32;
}

function kelvin(){
    return celcius() + 273;
}

function reamur(){
    return celcius() * 4/5;
}
?>
