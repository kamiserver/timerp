<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タイマー設定</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>時間を設定</h1>
        <form action="timer_logic.php" method="post">
            <label>時間: <input type="number" name="hours" min="0" max="23"> 時間</label><br>
            <label>分: <input type="number" name="minutes" min="0" max="59"> 分</label><br>
            <label>秒: <input type="number" name="seconds" min="0" max="59"> 秒</label><br>
            <button type="submit">保存</button>
        </form>
        <button onclick="window.location.href='index.php'">戻る</button>
    </div>
    <script src="app.js"></script>
</body>
</html>
