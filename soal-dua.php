<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>

    <?php
    echo "<h3> Soal 1 </h3>";

    // SOAL 1
    $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
    $adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];

    echo "<h3> Soal 2</h3>";

    // SOAL 2
    echo "Cast Stranger Things: ";
    echo "<br>";

    echo "Total Kids: " . count($kids);
    echo "<br>";

    echo "<ol>";
    echo "<li>$kids[0]</li>";
    echo "<li>$kids[1]</li>";
    echo "<li>$kids[2]</li>";
    echo "<li>$kids[3]</li>";
    echo "<li>$kids[4]</li>";
    echo "<li>$kids[5]</li>";
    echo "</ol>";

    echo "Total Adults: " . count($adults);
    echo "<br>";

    echo "<ol>";
    echo "<li>$adults[0]</li>";
    echo "<li>$adults[1]</li>";
    echo "<li>$adults[2]</li>";
    echo "<li>$adults[3]</li>";
    echo "<li>$adults[4]</li>";
    echo "</ol>";

    // SOAL 3
    $characters = [
        [
            "Name" => "Will Byers",
            "Age" => 12,
            "Aliases" => "Will the Wise",
            "Status" => "Alive"
        ],
        [
            "Name" => "Mike Wheeler",
            "Age" => 12,
            "Aliases" => "Dungeon Master",
            "Status" => "Alive"
        ],
        [
            "Name" => "Jim Hopper",
            "Age" => 43,
            "Aliases" => "Chief Hopper",
            "Status" => "Deceased"
        ],
        [
            "Name" => "Eleven",
            "Age" => 12,
            "Aliases" => "El",
            "Status" => "Alive"
        ]
    ];

    echo "<pre>";
    print_r($characters);
    echo "</pre>";
    ?>

</body>

</html>