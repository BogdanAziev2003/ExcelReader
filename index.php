<? 
    require_once 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\IOFactory;

    // Чтение файла Excel
    $excel_file = "data.xlsx";
    $reader = IOFactory::createReaderForFile($excel_file);
    $spreadsheet = $reader->load($excel_file);
    $worksheet = $spreadsheet->getActiveSheet();

    // Получение данных из листа
    $data = $worksheet->toArray();

    // Генерация HTML-таблицы
    $html_table = "<table>";
    foreach($data as $row) {
    $html_table .= "<tr>";
    foreach($row as $cell) {
        $html_table .= "<td>" . $cell . "</td>";
    }
    $html_table .= "</tr>";
    }
    $html_table .= "</table>";

    // Вывод HTML-таблицы
    echo $html_table;
?>