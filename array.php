<h1>Numeric Arrays</h1>
<?php

$color  = array("Black", "Green", "White", "Red", 7, 10);

print_r($color);
?>
<pre>
<?php
print_r($color);
?>
</pre>

<h1> Associative Array</h1>
<?php
$user_emails = array(

"Alex" => "aoko@email.com",
"Peter" =>"poka@gmail.com",
"Amani" =>"amani@gmail.com"
);
   
?>
<pre>
    <?php print_r($user_emails);
    ?>

<?php

$user_details = [

    "Director"=>[
        "Fullname" => "Alex Okama",
        "Email" => "Aokama@gmail.com",
        "Address" => "Mada",
        "Phone" =>[
        "Mobile"=>"+25473456698",
        "cell"=>"+25475858690",
        "work"=>"+2547459980"
        ],
    ],
    
    "Secretary"=>[
        "Fullname" => "Peter Okama",
        "Email" => "Pokama@gmail.com",
        "Address" => "Mada",
        "Phone" =>[
        "Mobile"=>"+25473456698",
        "cell"=>"+25475858690",
        "work"=>"+2547459980"
        ],
    ],

];

?>

<pre>
    <?php print_r($user_details);
    ?>