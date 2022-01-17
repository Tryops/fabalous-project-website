<html>
<head>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <style>
        .mr-10 {
            margin-right: 10px;
        }
    </style>
    <title>Stats</title>
</head>
<body>

<h1><i class="mr-10 icon-chart"></i>Stats</h1>
<h3><i class="mr-10 icon-envelope"></i>Referers</h3>
<?php
try {
    set_error_handler(function($errno, $errstr) { throw new Exception($errstr, $errno); }, E_WARNING);

    $file = './data/refs.json';
    $data = json_decode(file_get_contents($file));

    echo '<table>';
    echo '<th>Ref tag</th><th>Number of visits</th>';
    foreach ($data as $key => $value) {
        $key = htmlspecialchars($key);
        $value = htmlspecialchars($value);
        echo "
        <tr>
            <td>$key</td>
            <td>$value</td>
        </tr>";
    }
    echo '</table>';
} catch(\Exception $e) {
    echo '<code>Could not read data</code>';
}

?>
</body>
</html>