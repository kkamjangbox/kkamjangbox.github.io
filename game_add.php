<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>이동중 - KKAMJANGBOX Game DataBase</title>
    <style>
        body {
            text-align: center;
            font-family: sans-serif;
            padding-top: 30vh;
        }
        h1 {
            cursor: pointer;
        }
        .content {
            max-width: 800px;
            margin: 20px auto;
            text-align: left;
            min-height: 100px; /* 빈 컨텐츠 공간 확보 */
        }
    </style>
    <script>
        window.onload = function() {
            window.location.href = 'login.html';
        }
    </script>
</head>
<body>
    <h1 onclick="window.location.href='index.html'">KKAMJANGBOX<br>Game DataBase</h1>
    <hr>
    <h2>
        <a href="game_list.html">LIST</a> &nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="game_add.html">Add Game</a> &nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="game_list_maker.php">List Maker</a>
    </h2>
    <hr>
    <div class="content">
        <!-- 내용 없음 -->
    </div>
    <hr>
    <h4><a href="javascript:history.back()">돌아가기</a></h4>
</body>
</html>