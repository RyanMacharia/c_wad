<h1>Arrays</h1>
<?php
//inedxed or numeric arrays
$fname = ["John","Tom"];
print_r($fname);
echo '<br>';

$colors = array("Black","Green","Blue")
?>
<pre>
    <?php  print_r($colors);
    ?>
</pre>
<?php
//Associative Arrays

$users =[
    "Fullname " =>"Alex Okama",
    "email" =>"AOkama@yahoo.com",
    "phone" => "+254954095",
    
];

?>
<pre>
    <?php print_r($users);?>
</pre>
<?php
//Multidimentional Arrays

$user_details = [
    "Director" => array(
        "Fullname " =>"Alex Okama",
        "email" =>"AOkama@yahoo.com",
        "Address" =>"Mada"
        "phone" => [
            "Mobile" =>"+254954095",
            "Work" =>"+254384578",
            "cell" =>"+254728372849",


        ]
        )
        ];
        print $user_details["secretary"]["phone"]["work"];
?>
<pre>
    <?php print_r($user_details)?>
</pre>
<?php
$items = ["book","pen",456,45,"File254"]?>
<pre><?php
var_dump($items);?></pre>
<?php
$age =[45,42,23];
$user_age = array_combine($user,$age);

$user_data = array_merge($user,$age);?>