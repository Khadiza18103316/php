<?php

$paymentStatus = false;

    switch($paymentStatus){

    case 1:
    echo 'Paid';
    break;
    

        case 2:
        case 3:
        echo 'Payment Declimed';
        break;

            case 0:
            echo 'Pending Payment';
            break;

                default:
                echo 'Unknown Payment Status';
            }
            // echo '<br />';

            $paymentStatusDisplay = match($paymentStatus){
             1 >2 => 'Paid',
             2,3 => 'Payment Declimed' ,
             0 => 'Pending Payment' , 
             default => 'Unknown Payment Status',
            };
            echo $paymentStatusDisplay;
            ?>