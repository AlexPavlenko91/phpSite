<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="codebase/webix.js" type="text/javascript"></script>
    <link rel="STYLESHEET" type="text/css" href="codebase/webix.css">
</head>
<body>
<div id="chartDiv" style="width: 750px; height: 250px; margin: 10px"></div>
<div><input type="button" value="Сортировка по возрастанию оплаты, ASC"
            onclick="$$('chart').sort('#pr#','asc');">
    <input type="button" value="Сортировка по спаданию оплаты, DESC"
           onclick="$$('chart').sort('#pr#','desc');">
    <input type="button" value="Сортировка по месяцам, ASC"
           onclick="$$('chart').sort('#name#','asc');">
    <input type="button" value="Сортировка по алфавиту, DESC"
           onclick="$$('chart').sort('#name#','desc');"></div>
<?
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
$dbh = new PDO("mysql:host=localhost;dbname=department_of_housing", "root", "root", $opt
);
$res = $dbh->query("SELECT month(Date_Provided) as 'name', Sum(Payment) as 'pr' FROM `bill` GROUP by month(Date_Provided)");
$i = 0;
$arr = [];
$collors = ['#ee4339', '#A66298', '#786E9D', '#0E1E34', '#2559BE', '#31BE34', '#B84DBE', '#6ABE9B', '#6A5555'];
while ($row = $res->fetch()) {
    $row += array('color' => $collors[$i]);
    $arr[$i] = $row;
    $i++;
    /*$arr[$i] = $collors;*/
}
$json = json_encode($arr, JSON_NUMERIC_CHECK);
echo '<script> var a = ' . $json . '</script>';

?>
<script>
    /* var multiple_dataset = [
         {count: "132", vip: "35", cn: "234", name: "02"},
         {count: "234", vip: "345", cn: "54", name: "06"},
         {count: "45", vip: "44", cn: "555", name: "08"},
         {count: "45", vip: "66", cn: "555", name: "09"},
         {count: "56", vip: "55", cn: "666", name: "11"},
         {count: "45", vip: "667", cn: "745", name: "12"},
         {count: "6", vip: "78", cn: "34", name: "10"},
         {count: "7", vip: "54", cn: "44", name: "01"}
     ];
     webix.ui({
         container: "chartDiv",
         view: "chart",
         type: "bar",
         barWidth: 20,
         radius: 2,
         alpha: 0.7,
         gradient: "rising",
         xAxis: {
             template: "'#name#"
         },
         yAxis: {
             start: 0,
             step: 10,
             end: 100
         },
         legend: {
             values: [{text: "Количество продавцев", color: "#4aa397"}, {
                 text: "Покупателей",
                 color: "#69ba00"
             }, {text: "Количество заказов", color: "#de619c", markerType: "item"}],
             valign: "middle",
             align: "right",
             width: 180,
             layout: "y"
         },
         series: [
             {
                 value: "#count#",
                 color: "#4aa397",
                 tooltip: {
                     template: "#count#"
                 }
             },
             {
                 value: "#vip#",
                 color: "#69ba00",
                 tooltip: {
                     template: "#vip#"
                 }
             },
             {

                 type: "line",
                 value: "#cn#",
                 color: "#36abee",

                 item: {
                     borderColor: "#b7286c",
                     color: "#de619c",
                     type: "s"
                 },
                 line: {
                     color: "#de619c",
                     width: 2
                 },
                 tooltip: {
                     template: "#cn#"
                 }
             }
         ],
         data: multiple_dataset
     });*/
    console.log(a);
    let dataset_colors = a;

    webix.ui({
        id: "chart",
        container: "chartDiv",
        view: "chart",
        type: "bar",
        value: "#pr#",
        label: "#pr#",
        color: "#color#",
        radius: 0,
        barWidth: 40,
        tooltip: {
            template: "#pr#"
        },
        xAxis: {
            title: "Диаграмма заказов",
            template: "'#name#",
            lines: false
        },
        padding: {
            left: 10,
            right: 10,
            top: 50
        },
        data: dataset_colors
    });
</script>
</body>
</html>
<?php

