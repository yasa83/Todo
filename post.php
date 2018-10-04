<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>To Do List</title>
</head>
<body>
    <div class="center">
        <h1>To do list</h1>
    </div>
    <!-- タスク登録 -->
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner">
        <div class="overlay"></div>
        <div class="container" style="padding-top:45px;">
            <div class="col-xs-8 col-xs-offset-2 thumbnail">
                <h2 class="text-center content_header">タスク登録</h2>
                <form method="POST" action="post.php">
                    <div class="form-group a">
                        <label for="title">タイトル</label>
                        <input type="text" name="title" class="form-control" value="" placeholder="予定の題名">
                    </div>
                    <div class="form-group b">
                        <label for="detail">詳細</label>
                        <br>
                        <textarea rows="10" cols="60" name="detail">ここに詳細を記入してください</textarea>
                    </div>
                    <div class="form-group c">
                        <label for="plan_date">予定日</label>
                        <input type="date" name="input_date" class="form-control" value="">
                    </div>
                    <div class="form-group d">
                        <label>優先順位</label>
                        <br>
                        <label class="checkbox-inline">
                            <input type="radio" name="priority" value="high" checked="checked">高
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="priority" value="middle">中
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="priority" value="low">低
                        </label>
                    </div>
                        <input type="hidden" name="friend_id" value="<?php echo $friend_id; ?>">
                    <br>
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active"><a href="index.php">戻る</a></li>
                    </ul>
                    <input type="submit" class="btn btn-primary" value="登録">
                </form>
            </div>
        </div>
    </header>
<!-- ヘッダー終わり -->
    <!--    自分で作ったやつ -->
    <script src="assets/js/script.js"></script>
</body>
</html>