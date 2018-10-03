<?php

if( isset($_POST) )
{
    $customer    = trim(htmlentities($_POST['name']));     // sanitize and trim name of a customer
    $phone       = trim(htmlentities($_POST['phone']));    // sanitize and trim phone of a customer
    $dateCreate  = date('Y-m-d' );                  // current date created

    if( !empty($customer) && !empty($phone) )
    {
        $mysqli = new mysqli('127.0.0.1', 'root', '', 'tvoe_nebo_crm'); // connect to the database
        $mysqli->set_charset('utf8' );
        if( $mysqli->connect_errno )
        {
            echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            exit;
        }

        // check if phone number of a customer is exists in the database
        $checkPhoneCusomer = $mysqli->query("SELECT `customer_id` FROM `tvoe_nebo_crm`.`phone` WHERE `phone` = '{$phone}' LIMIT 1");
        if( $checkPhoneCusomer->num_rows > 0 )          // if customer already exist
        {
            $customerId  = (int) $checkPhoneCusomer->fetch_assoc()['customer_id'];  // an id of exist customer
            /*
            $insertOrder = $mysqli->query("INSERT INTO `tvoe_nebo_crm`.`orders` (`date_create`, `status`, `customer_id`) VALUES ('{$dateCreate}', 'new', {$customerId})");
            header("Location: http://{$_SERVER['HTTP_HOST']}/site/thanks", true, 302);
            */
        }

        else // if customer is new and create an order first time
        {
            $insertCustomer = $mysqli->query("INSERT INTO `tvoe_nebo_crm`.`customer` (`customer`) VALUES ('{$customer}')");
            $customerId     = $mysqli->insert_id; // last inserted Id
            $insertPhone    = $mysqli->query("INSERT INTO `tvoe_nebo_crm`.`phone` (`phone`, `customer_id`) VALUES ('{$phone}', {$customerId})");
            /*
            $insertOrder    = $mysqli->query("INSERT INTO `tvoe_nebo_crm`.`orders` (`date_create`, `status`, `customer_id`) VALUES ('{$dateCreate}', 'new', {$customerId})");
            header("Location: http://{$_SERVER['HTTP_HOST']}/site/thanks", true, 302);
            */
        }

        $insertOrder = $mysqli->query("INSERT INTO `tvoe_nebo_crm`.`orders` (`date_create`, `status`, `customer_id`) VALUES ('{$dateCreate}', 'new', {$customerId})");
        header("Location: http://{$_SERVER['HTTP_HOST']}/site/thanks", true, 302);

        // close the connection with db
        mysqli_close($link);
    }

    else
    {
        exit('Please fill all fields in the form and try to send an application again!');
    }
}