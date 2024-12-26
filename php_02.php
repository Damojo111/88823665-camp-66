<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เลขคู่และคี่</title>
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
        .even {
            font-size: 1.5rem;
            color: green;
        }
        .odd {
            font-size: 1.5rem;
            color: red;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="table-header">เลขคู่และคี่</h1>
        <?php for ($i = 1; $i <= 100; $i++): ?>
            <p class="<?= $i % 2 == 0 ? 'even' : 'odd' ?>">
                <?= "$i เป็นเลข " . ($i % 2 == 0 ? "คู่" : "คี่") ?>
            </p>
        <?php endfor; ?>
    </div>
</body>
</html>
