<?php
echo "Hello World";
echo "<br>";
// echo $name;
$userDetails = ["name" => "Adewole", "age" => "22", "color" => "black"];
$userDetails2 = ["name" => "Opeyemi", "age" => "20", "color" => "yellow"];
$userDetails3 = ["name" => "Ore-ofe", "age" => "16", "color" => "green"];
$userDetails["food"] = "beans";
echo "<br>";
$users = [$userDetails, $userDetails2, $userDetails3];
for ($i = 0; $i < count($users); $i++) {
    print_r($users[$i]["name"]);
    echo "<br>";
}
print_r($users[0]["food"]);
echo "<br>";
$name = "Adewole";
$blogs = [
    ["wole", "ife", "ope", "ore", "victor"],
    ["joseph", "elizabeth", "samuel", "emmanuel", "victor"],
    ['fiyinfoluwa', "evelyn", "adeboye", "richard", "ademola"]
];
for ($i = 0; $i < count($blogs); $i++) {
    print_r($blogs[$i][0]);
    echo "<br>";
}
;
print_r($blogs[0][0]);
echo "<br>";

function loopName()
{
    global $users;
    $name = "Adewole";
    foreach ($users as $value) {
        if ($value["name"] == $name) {
            echo (33);
            $newName = $value["name"];
            print_r("Welcome $newName");
            echo ("<br>");

            break;
        } else {
            print_r($value);
        }
    }
}
loopName();
$numArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function loopNum()
{
    global $numArr;
    for ($i = 0; $i < count($numArr); $i++) {
        ($numArr[$i] % 2 == 0) ? print_r("$numArr[$i] is even") : (($numArr[$i] % 2 != 0) ? print_r("$numArr[$i] is odd") : print_r("DENGELOUS"));
            
        // break;
    }


}

loopNum();
// print_r($ans)
?>