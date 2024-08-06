<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タイマー</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 id="timer-display">00:00:00</h1>
        <button id="start-btn">スタート</button>
        <button id="stop-btn">ストップ</button>

        <form id="timer-form" action="timer_logic.php" method="post">
            <label for="hours">時間:</label>
            <input type="number" id="hours" name="hours" min="0" max="23" value="0"> 時間<br>
            <label for="minutes">分:</label>
            <input type="number" id="minutes" name="minutes" min="0" max="59" value="0"> 分<br>
            <label for="seconds">秒:</label>
            <input type="number" id="seconds" name="seconds" min="0" max="59" value="0"> 秒<br>
            <button type="submit">設定</button>
        </form>
    </div>
    <script src="app.js"></script>
</body>
</html>
