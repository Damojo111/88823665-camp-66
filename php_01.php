<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สูตรคูณแม่ 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body {
            background-color: #fef4c5;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .table-header {
            text-align: center;
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
        }
        .result-item {
            font-size: 1.5rem;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="table-header">สูตรคูณแม่ 2</h1>
        <?php for ($i = 1; $i <= 12; $i++): ?>
            <p class="result-item"><?= "2 x $i = " . (2 * $i) ?></p>
        <?php endfor; ?>
    </div>
</body>
</html>
