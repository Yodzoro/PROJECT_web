<?php
$vote1 = $_GET['vote1'];

$filename1 = "result_skz.json";
if (!file_exists($filename1)) {
    // если файл не существует, создаем новый
    $initial_data = array(
        "BANGCHAN" => 0,
        "LEEKNOW" => 0,
        "CHANGBIN" => 0,
        "HYUNJIN" => 0,
        "HAN" => 0,
        "FELIX" => 0,
        "SEUNGMIN" => 0,
        "IN" => 0
    );
    $fp1 = fopen($filename1, "w");
    fwrite($fp1, json_encode($initial_data));
    fclose($fp1);
}

// читаем данные из файла JSON
$content1 = file_get_contents($filename1);
$data1 = json_decode($content1, true);

// увеличиваем количество голосов для выбранного участника
if ($vote1 == 0) {
    $data1["BANGCHAN"]++;
}
if ($vote1 == 1) {
    $data1["LEEKNOW"]++;
}
if ($vote1 == 2) {
    $data1["CHANGBIN"]++;
}
if ($vote1 == 3) {
    $data1["HYUNJIN"]++;
}
if ($vote1 == 4) {
    $data1["HAN"]++;
}
if ($vote1 == 5) {
    $data1["FELIX"]++;
}
if ($vote1 == 6) {
    $data1["SEUNGMIN"]++;
}
if ($vote1 == 7) {
    $data1["IN"]++;
}


// записываем обновленные данные в файл JSON
$fp1 = fopen($filename1, "w");
fwrite($fp1, json_encode($data1));
fclose($fp1);


$output = '<div id="vote_res1" class="vote-results">
<h2>RESULTS:</h2>
<table>
    <tr>
        <td>BANGCHAN:</td>
        <td>
            <div class="q11">
                '.$data1["BANGCHAN"].' votes
            </div>
        </td>
    </tr>
    <tr>
        <td>LEEKNOW:</td>
        <td>
            <div class="q12">
                '.$data1["LEEKNOW"].' votes
            </div>
        </td>
    </tr>
    <tr>
        <td>CHANGBIN:</td>
        <td>
            <div class="q13">
                '.$data1["CHANGBIN"].' votes
            </div>
        </td>
    </tr>
    <tr>
        <td>HYUNJIN:</td>
        <td>
            <div class="q14">
                '.$data1["HYUNJIN"].' votes
            </div>
        </td>
    </tr>
    <tr>
    <tr>
        <td>HAN:</td>
        <td>
            <div class="q15">
                 '.$data1["HAN"].' votes
            </div>
        </td>
    </tr>
    <tr>
    <tr>
        <td>FELIX:</td>
        <td>
            <div class="q16">
                '.$data1["FELIX"].' votes
            </div>
        </td>
    </tr>
    <tr>
    <tr>
        <td>SEUNGMIN:</td>
        <td>
            <div class="q17">
                '.$data1["SEUNGMIN"].' votes
            </div>
        </td>
    </tr>
    <tr>
    <tr>
        <td>I.N:</td>
        <td>
            <div class="q18">
                '.$data1["IN"].' votes
            </div>
        </td>
    </tr>
    <tr>
</table>
</div>';
echo $output;