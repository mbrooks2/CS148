<?php
function Greetings($hours = 0){
       if ($hours<='11'){
           echo 'Good Morning';}
       elseif ($hours<='14' ){
           echo 'Good Afternoon';}
        elseif ($hours<='17') {
             echo 'Good Evening'; }
        else {
            echo 'Good Night'; }
            

}
Greetings(12);   
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

