<?php



$m_username = $_POST["userName"];
$m_password = $_POST["password"];

//Checks if apples was selected
$m_apples = $_POST["apples"];
$q_apples = $_POST["quantity1"];
if(!(isset($m_apples)))
{
    $q_apples = 0;
}

//Checks if bread was selected
$m_bread = $_POST["bread"];
$q_bread = $_POST["quantity2"];
if(!(isset($m_bread)))
{
    $q_bread = 0;
}

//Checks if potatoes was selected
$m_potatoes = $_POST["potatoes"];
$q_potatoes = $_POST["quantity3"];
if(!(isset($m_potatoes)))
{
    $q_potatoes = 0;
}

//Checks if eggs was selected
$m_eggs = $_POST["eggs"];
$q_eggs = $_POST["quanity4"];
if(!(isset($m_eggs)))
{
    $q_eggs = 0;
}

$m_shipping = $_POST["shipping"];
$m_shippingCost = 0;

//Adjusts shipping cost based on choice
if($m_shipping == "$5.00 three day")
{
    $m_shippingCost = 5;
}
else if($m_shipping == "$50.00 overnight")
{
    $m_shippingCost = 50;
}
else
{
    $m_shippingCost = 0;
}

$submitButton = $_POST["submitButton"];

//Prints receipt
if(isset($submitButton))
{
    echo "<html>";
    
    echo "<body>";

    echo "Payment processed." . "</br>";
    echo "</br>";

    echo "Welcome, " . $m_username . "." . "</br>";
    echo "(With password: " . $m_password . ".)" . "</br>";
    echo "</br>";


    echo "<table>";
    echo "<tr>";
    echo "<th>" . " " . "</th>";
    echo "<th>" . "Quantity" . "</th>";
    echo "<th>" . "Cost Per Item" . "</th>";
    echo "<th>" . "Sub Total" . "</th>";
    echo "</tr>";
    //Apples Total
    echo "<tr>";
    echo "<th>" . "Apples" . "</th>";
    echo "<th>" . $q_apples . "</th>";
    echo "<th>" . "$1.50" . "</th>";
    echo "<th>" . "$" . $q_apples*1.5 . "</th>";
    echo "</tr>";
    //Bread Total
    echo "<tr>";
    echo "<th>" . "Bread" . "</th>";
    echo "<th>" . $q_bread . "</th>";
    echo "<th>" . "$1.25" . "</th>";
    echo "<th>" . "$" . $q_bread*1.25 . "</th>";
    echo "</tr>";
    //Potatoes Total
    echo "<tr>";
    echo "<th>" . "Potatoes" . "</th>";
    echo "<th>" . $q_potatoes . "</th>";
    echo "<th>" . "$2.25" . "</th>";
    echo "<th>" . "$" . $q_potatoes*2.25 . "</th>";
    echo "</tr>";
    //Eggs Total
    echo "<tr>";
    echo "<th>" . "Eggs" . "</th>";
    echo "<th>" . $q_eggs . "</th>";
    echo "<th>" . "$1.50" . "</th>";
    echo "<th>" . "$" . $q_eggs*1.50 . "</th>";
    echo "</tr>";
    //Shipping Total
    echo "<tr>";
    echo "<th>" . "Shipping" . "</th>";
    echo "<th>" . $m_shipping . "</th>";
    echo "<th>" . $m_shippingCost . "</th>";
    echo "</tr>";
    //Total Cost
    echo "<tr>";
    echo "<th>" . "Total Cost" . "</th>";
    echo "<th>" . "$" . ($q_apples*1.50 + $q_bread*1.25 + $q_potatoes*2.25 + $q_eggs*1.50 + $m_shippingCost) . "</th>";
    echo "</tr>";

    echo "</body>";
    echo "</html>";
}


?>

