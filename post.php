<?php
require('dbconnect.php');

$errors = array();

//空の値を用意
$title = '';
$detail = '';
$plan_date = '';
$priority = '';

if(!empty($_POST)){
    $title = $_POST['title'];
    $detail = $_POST['detail'];
    $plan_date = $_POST['plan_date'];
    $priority = $_POST['priority'];

    if($title == '' ){
        $errors['title'] = 'blank';
    } 

    if($plan_date == ''){
        $errors['plan_date'] = 'blank';
    }

    //エラーがなかった時の処理
    if(empty($errors)){
        $sql = 'INSERT INTO `tasks` SET `title` =?, `detail`=?, `plan_date` = ?,`priority` = ?';
        $data = array($title,$detail,$plan_date, $priority);
        $stmt = $dbh->prepare($sql);
        $stmt->execute($data);

        header('Location: index.php');
        exit();
    }
}



?>
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
        <h1 class="text-center">To Do List</h1>
    </div>
    <!-- タスク登録 -->
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner">
        <div class="overlay"></div>
        <div class="container" style="padding-top:45px;">
            <div class="col-xs-8 col-xs-offset-2 thumbnail">
                <h2 class="text-center content_header">タスク登録</h2>
                <form method="POST" action="post.php" onsubmit="return submitChk()">
                    <div class="form-group a">
                        <label for="title">タイトル</label>
                        <input type="text" name="title" class="form-control" value="" placeholder="予定の題名">
                        <?php if(isset($errors['title']) && $errors['title'] == 'blank'): ?>
                            <p class="text-danger">タイトルを入力してください</p>
                        <?php endif;?>
                    </div>
                    <div class="form-group b">
                        <label for="detail">詳細</label>
                        <br>
                        <textarea rows="10" cols="60" name="detail">ここに詳細を記入してください</textarea>
                    </div>
                    <div class="form-group c">
                        <label for="plan_date">予定日</label>
                        <input type="date" name="plan_date" class="form-control" value="">
                        <?php if(isset($errors['plan_date']) && $errors['plan_date'] == 'blank'): ?>
                            <p class="text-danger">終了予定日を入力してください</p>
                        <?php endif;?>
                    </div>
                    <div class="form-group d">
                        <label>優先順位</label>
                        <br>
                        <label class="checkbox-inline">
                            <input type="radio" name="priority" value="高" checked="checked">高
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="priority" value="中">中
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="priority" value="低">低
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
    <script>
    /**
     * 確認ダイアログの返り値によりフォーム送信
    */
    function submitChk () {
        /* 確認ダイアログ表示 */
        var flag = confirm ( "タスクを登録してもよろしいですか？\n\n登録したくない場合は[キャンセル]ボタンを押して下さい");
        /* send_flg が TRUEなら送信、FALSEなら送信しない */
        return flag;
    }
    </script>
</body>
</html>