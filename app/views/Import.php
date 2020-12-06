<?php
if (isset($fileName)) {
    header('Content-Type: text/html; charset=utf-8');
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    require_once 'PHPExcel-1.8/Classes/PHPExcel.php';
    require_once 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel5.php';
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    $dbh = new PDO("mysql:host=localhost;dbname=department_of_housing", "root", "root", $opt
    );

    if (file_exists($fileName)) {
        echo "The file $fileName loaded";
        $pExcel = PHPExcel_IOFactory::load($fileName);
        // Цикл по листам Excel-файла
        $i = 0;
        foreach ($pExcel->getWorksheetIterator() as $worksheet) {
            $tables[] = $worksheet->toArray();
            $i++;
        }
        $n = 0;
        foreach ($tables as $table) {
            foreach ($table as $row) {
                if (!empty($row[0]) && $row[0] != '' && $row[1] != 'Название услуги') {
                    if ($n != 0) {

                        if ($_POST['services'] != '') {

                            if($_POST['services']==$row[1]){
                                /*var_dump($_POST);*/
                                $flatNum = $row[0];
                                $servName = $row[1];
                                $Date_Provided = $row[5];
                                $Sum = $row[7];
                                if ($row[8] == '') {
                                    $Payment = 'NULL';
                                } else {
                                    $Payment = $row[8];
                                };
                                $Date_of_Payment = $row[9];
                                $fId = $row[10];
                                $resServId = $dbh->query("select Id from services where Name like '{$servName}'");
                                $row1 = $resServId->fetch();
                                $idService = $row1['Id'];
                                echo $fId;
                                $str = "INSERT INTO `bill`(`Date_Provided`, `Sum`, `Payment`, 
                                    `Date_of_Payment`, `id_Service`, `id_Apartments`) 
                                    VALUES ('{$Date_Provided}',{$Sum},{$Payment},'{$Date_of_Payment}',{$idService},{$fId})";
                                /*echo $str;*/
                                $dbh->query($str);
                            }
                        } else {
                            $flatNum = $row[0];
                            $servName = $row[1];
                            $Date_Provided = $row[5];
                            $Sum = $row[7];
                            if ($row[8] == '') {
                                $Payment = 'NULL';
                            } else {
                                $Payment = $row[8];
                            };
                            $Date_of_Payment = $row[9];
                            $fId = $row[10];
                            $resServId = $dbh->query("select Id from services where Name like '{$servName}'");
                            $row1 = $resServId->fetch();
                            $idService = $row1['Id'];
                            echo $fId;
                            $str = "INSERT INTO `bill`(`Date_Provided`, `Sum`, `Payment`, 
                            `Date_of_Payment`, `id_Service`, `id_Apartments`) 
                            VALUES ('{$Date_Provided}',{$Sum},{$Payment},'{$Date_of_Payment}',{$idService},{$fId})";
                            echo $str;
                            $dbh->query($str);
                        }
                    }
                }
                $n++;
            }
        }
    }
}
?>
<form method="post" action="<?= Url::getAction('import', 'importrez') ?>"
      enctype="multipart/form-data"><input type="file" name="excel" required>
    <select name="services">
        <option></option>
        <option></option>
        <? foreach ($services as $item) {
            echo "<option value='{$item['Name']}'>{$item['Name']}</option>";
        } ?>
    </select>
    <input type="submit" value="Імпортувати дані" name="btn-add"></form>


