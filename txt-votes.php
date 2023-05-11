<?php
$vote3 = $_GET['vote3'];

$filename3 = "result_txt.json";
if (!file_exists($filename3)) {
    // если файл не существует, создаем новый
    $initial_data = array(
        "YEONJUN" => 0,
        "SOOBIN" => 0,
        "BEOMGYU" => 0,
        "TAEHYUNG" => 0,
        "HUENING KAI" => 0
    );
    $fp3 = fopen($filename3, "w");
    fwrite($fp3, json_encode($initial_data));
    fclose($fp3);
}

// читаем данные из файла JSON
$content3 = file_get_contents($filename3);
$data3 = json_decode($content3, true);

// увеличиваем количество голосов для выбранного участника
if ($vote3 == 0) {
    $data3["YEONJUN"]++;
}
if ($vote3 == 1) {
    $data3["SOOBIN"]++;
}
if ($vote3 == 2) {
    $data3["BEOMGYU"]++;
}
if ($vote3 == 3) {
    $data3["TAEHYUNG"]++;
}
if ($vote3 == 4) {
    $data3["HUENING KAI"]++;
}

// записываем обновленные данные в файл JSON
$fp3 = fopen($filename3, "w");
fwrite($fp3, json_encode($data3));
fclose($fp3);

// выводим результаты голосования
$output ='<div id="vote_res3" class="vote-results">
<h2>RESULTS:</h2>
<table>
    <tr>
        <td>YEONJIN:</td>
        <td>
            <div class="q31">
                '.$data3["YEONJUN"].' votes
            </div>
        </td>
    </tr>
    <tr>
        <td>SOOBIN:</td>
        <td>
            <div class="q32">
                '.$data3["SOOBIN"].' votes
            </div>
        </td>
    </tr>
    <tr>
        <td>BEOMGYU:</td>
        <td>
            <div class="q33">
                '.$data3["BEOMGYU"].' votes
            </div>
        </td>
    </tr>
    <tr>
        <td>TAEHYUNG:</td>
        <td>
            <div class="q34">
                '.$data3["TAEHYUNG"].' votes
            </div>
        </td>
    </tr>
    <tr>
    <tr>
        <td>HUENING KAI:</td>
        <td>
            <div class="q35">
                '.$data3["HUENING KAI"].' votes
            </div>
        </td>
    </tr>
    <tr>
</table>
</div>';
echo $output;
