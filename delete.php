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
<!--     <div class="container">
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="col-xs-2 done active"><a>完了タスク一覧</a></li>
                <li class="col-xs-2 not-done"><a>未完了タスク一覧</a></li>
            </ul>
            <br>
        </div>
    </div>
 -->

<!-- 完了タスク -->
    <div class="container">
        <div class="row row-bottom-padded-md " id="done">
            <div class="col-xs-12 col-md-12">
                <div class="box box-aqua">
                <div class="box-header ui-sortable-handle" style="cursor: move;">
                    <i class="ion ion-clipboard"></i>
                    <h3 class="box-title">完了タスク一覧</h3>
                </div>
                    <div class="box-body">
                        <ul class="todo-list ui-sortable">
                          <li>
                            <span class="handle ui-sortable-handle">
                              <i class="fa fa-ellipsis-v"></i>
                              <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <input type="checkbox" value="" name="">
                            <span class="text">Design a nice theme</span>
                            <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                            <div class="tools">
                              <i class="fa fa-edit"></i>
                              <i class="fa fa-trash-o"></i>
                            </div>
                          </li>
                          <li>
                            <span class="handle ui-sortable-handle">
                              <i class="fa fa-ellipsis-v"></i>
                              <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <input type="checkbox" value="" name="">
                            <span class="text">Make the theme responsive</span>
                            <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                            <div class="tools">
                              <i class="fa fa-edit"></i>
                              <i class="fa fa-trash-o"></i>
                            </div>
                          </li>
                          <li>
                            <span class="handle ui-sortable-handle">
                              <i class="fa fa-ellipsis-v"></i>
                              <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <input type="checkbox" value="" name="">
                            <span class="text">Let theme shine like a star</span>
                            <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                            <div class="tools">
                              <i class="fa fa-edit"></i>
                              <i class="fa fa-trash-o"></i>
                            </div>
                          </li>
                          <li>
                            <span class="handle ui-sortable-handle">
                              <i class="fa fa-ellipsis-v"></i>
                              <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <input type="checkbox" value="" name="">
                            <span class="text">Let theme shine like a star</span>
                            <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                            <div class="tools">
                              <i class="fa fa-edit"></i>
                              <i class="fa fa-trash-o"></i>
                            </div>
                          </li>
                          <li>
                            <span class="handle ui-sortable-handle">
                              <i class="fa fa-ellipsis-v"></i>
                              <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <input type="checkbox" value="" name="">
                            <span class="text">Check your messages and notifications</span>
                            <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                            <div class="tools">
                              <i class="fa fa-edit"></i>
                              <i class="fa fa-trash-o"></i>
                            </div>
                          </li>
                          <li>
                            <span class="handle ui-sortable-handle">
                              <i class="fa fa-ellipsis-v"></i>
                              <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <input type="checkbox" value="" name="">
                            <span class="text">Let theme shine like a star</span>
                            <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                            <div class="tools">
                              <i class="fa fa-edit"></i>
                              <i class="fa fa-trash-o"></i>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="box-footer clearfix no-border">
                      <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
                      </div>
                </div>
                </div>
            </div>
        </div>
    </div>

<!-- 未完了タスク -->
    <div class="container">
        <div class="row row-bottom-padded-md " id="not-done">
            <div class="col-xs-12 col-md-12">
                <div class="box box-green">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="ion ion-clipboard"></i>
                        <h3 class="box-title">To Do List</h3>
                    </div>

                      <div class="box-body">
                        <ul class="todo-list ui-sortable">
                          <li>
                            <span class="handle ui-sortable-handle">
                              <i class="fa fa-ellipsis-v"></i>
                              <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <input type="checkbox" value="" name="">
                            <span class="text">Design a nice theme</span>
                            <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                            <div class="tools">
                              <i class="fa fa-edit"></i>
                              <i class="fa fa-trash-o"></i>
                            </div>
                          </li>
                          <li>
                            <span class="handle ui-sortable-handle">
                              <i class="fa fa-ellipsis-v"></i>
                              <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <input type="checkbox" value="" name="">
                            <span class="text">Make the theme responsive</span>
                            <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                            <div class="tools">
                              <i class="fa fa-edit"></i>
                              <i class="fa fa-trash-o"></i>
                            </div>
                          </li>
                          <li>
                            <span class="handle ui-sortable-handle">
                              <i class="fa fa-ellipsis-v"></i>
                              <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <input type="checkbox" value="" name="">
                            <span class="text">Let theme shine like a star</span>
                            <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                            <div class="tools">
                              <i class="fa fa-edit"></i>
                              <i class="fa fa-trash-o"></i>
                            </div>
                          </li>
                          <li>
                            <span class="handle ui-sortable-handle">
                              <i class="fa fa-ellipsis-v"></i>
                              <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <input type="checkbox" value="" name="">
                            <span class="text">Let theme shine like a star</span>
                            <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                            <div class="tools">
                              <i class="fa fa-edit"></i>
                              <i class="fa fa-trash-o"></i>
                            </div>
                          </li>
                          <li>
                            <span class="handle ui-sortable-handle">
                              <i class="fa fa-ellipsis-v"></i>
                              <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <input type="checkbox" value="" name="">
                            <span class="text">Check your messages and notifications</span>
                            <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                            <div class="tools">
                              <i class="fa fa-edit"></i>
                              <i class="fa fa-trash-o"></i>
                            </div>
                          </li>
                          <li>
                            <span class="handle ui-sortable-handle">
                              <i class="fa fa-ellipsis-v"></i>
                              <i class="fa fa-ellipsis-v"></i>
                            </span>
                            <input type="checkbox" value="" name="">
                            <span class="text">Let theme shine like a star</span>
                            <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                            <div class="tools">
                              <i class="fa fa-edit"></i>
                              <i class="fa fa-trash-o"></i>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="box-footer clearfix no-border">
                      <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
                      </div>
                    </div>
                  </div>    
                </div>
            </div>
        </div>
    </div>

    <!--    自分で作ったやつ -->
    <script src="assets/js/script.js"></script>
</body>
</html>