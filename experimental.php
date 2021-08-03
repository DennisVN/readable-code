<?php


function ordr_pz($pizzatype, $client) 
{
    $type = $pizzatype;
    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizzatype;
    $price = calc_cts($type);

    $address = 'unknown';
    if ($client == 'koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($client == 'manuele') {
        $address = 'somewhere in Belgium';
    } elseif ($client == 'students') {
        $address = 'BeCode office';
    }

    $toPrint .=   ' pizza should be sent to ' . $client . ". <br>The address: {$address}.";
    echo $toPrint; echo '<br>';
    echo'The bill is €'.$price.'.<br>';
    echo "Order finished.<br><br>";
}

function total_price($price) 
{
    return $price;
}

function test($flavor) 
{
    echo "Test: type is {$flavor}. <br>";
}

function calc_cts($flavor) 
{
    $cst = 'unknown';

    if ($flavor == 'marguerita') 
    {
        $cst = 5;
    }else {
        if ($flavor == 'golden')
        {
            $cst = 100;
        }

        if ($flavor == 'calzone')
        {
            $cst = 10;
        }

        if ($flavor == 'hawai') 
        {
            throw new Exception('Computer says no');
        }
        
    }
    
    return $cst;
}

function ordr_piz_all() 
{
    $test= 0;
    ordr_pz('calzone', 'koen');
    ordr_pz('marguerita', 'manuele');
    ordr_pz('golden', 'students');
}

function make_Allhappy($do_it) 
{
if ($do_it) {
    ordr_piz_all();
    } else {
        // Should not do anything when false
    }
}

make_Allhappy(true);