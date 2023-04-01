<? 
    require_once 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\IOFactory;

    $excel_file = "data.xlsx";
    $reader = IOFactory::createReaderForFile($excel_file);
    $spreadsheet = $reader->load($excel_file);
    $worksheet = $spreadsheet->getActiveSheet();

    $data = $worksheet->toArray();

    $html_table = "<table>";
    foreach($data as $row) {
    $html_table .= "<tr>";
    foreach($row as $cell) {
        $html_table .= "<td>" . $cell . "</td>";
    }
    $html_table .= "</tr>";
    }
    $html_table .= "</table>";

    echo $html_table;
?>
