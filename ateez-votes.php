<?php
$vote2 = $_GET['vote2'];

$filename2 = "result_ateez.json";
if (!file_exists($filename2)) {
    // если файл не существует, создаем новый
    $initial_data = array(
        "HONGJOONG" => 0,
        "SEONGHWA" => 0,
        "YUNHO" => 0,
        "YEOSANG" => 0,
        "SAN" => 0,
        "MINGI" => 0,
        "WOOYOUNG" => 0,
        "JONGHO" => 0
    );
    $fp2 = fopen($filename2, "w");
    fwrite($fp2, json_encode($initial_data));
    fclose($fp2);
}

// читаем данные из файла JSON
$content2 = file_get_contents($filename2);
$data2 = json_decode($content2, true);

// увеличиваем количество голосов для выбранного участника
if ($vote2 == 0) {
    $data2["HONGJOONG"]++;
}
if ($vote2 == 1) {
    $data2["SEONGHWA"]++;
}
if ($vote2 == 2) {
    $data2["YUNHO"]++;
}
if ($vote2 == 3) {
    $data2["YEOSANG"]++;
}
if ($vote2 == 4) {
    $data2["SAN"]++;
}
if ($vote2 == 5) {
    $data2["MINGI"]++;
}
if ($vote2 == 6) {
    $data2["WOOYOUNG"]++;
}
if ($vote2 == 7) {
    $data2["JONGHO"]++;
}

// записываем обновленные данные в файл JSON
$fp2 = fopen($filename2, "w");
fwrite($fp2, json_encode($data2));
fclose($fp2);


$output = '<div id="vote_res2" class="vote-results">
<h2>RESULTS:</h2>
<table>
    <tr>
        <td>HONGJOONG:</td>
        <td>
            <div class="q21">
                '.$data2["HONGJOONG"].' votes
            </div>
        </td>
    </tr>
    <tr>
        <td>SEONGHWA:</td>
        <td>
            <div class="q22">
                '.$data2["SEONGHWA"].' votes
            </div>
        </td>
    </tr>
    <tr>
        <td>YUNHO:</td>
        <td>
            <div class="q23">
                '.$data2["YUNHO"].' votes
            </div>
        </td>
    </tr>
    <tr>
        <td>YEOSANG:</td>
        <td>
            <div class="q24">
                '.$data2["YEOSANG"].' votes
            </div>
        </td>
    </tr>
    <tr>
    <tr>
        <td>SAN:</td>
        <td>
            <div class="q25">
                '.$data2["SAN"].' votes
            </div>
        </td>
    </tr>
    <tr>
    <tr>
        <td>MINGI:</td>
        <td>
            <div class="q26">
                '.$data2["MINGI"].' votes
            </div>
        </td>
    </tr>
    <tr>
    <tr>
        <td>WOOYOUNG:</td>
        <td>
            <div class="q27">
                '.$data2["WOOYOUNG"].' votes
            </div>
        </td>
    </tr>
    <tr>
    <tr>
        <td>JONGHO:</td>
        <td>
            <div class="q28">
                '.$data2["JONGHO"].' votes
            </div>
        </td>
    </tr>
    <tr>
</table>
</div>';
echo $output;
