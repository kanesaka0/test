<!DOCTYPE html>
<html>
<head>
<meta charset-"UTF-8">
<title>ろくまる農園</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 <div class="bg-danger">
 <div class="container">
スタッフ追加<br />
<br />
<form method="post" action="staff_add_check.php">
スタッフ名を入力してください。<br />
<input type="text" name="name" style="width;200px"><br />
パスワードを入力してください。<br />
<input type="password" name="pass" style="width;100px"><br />
パスワードをもう一度入力してください。<br />
<input type="password" name="pass2" style="width;100px"><br />
<br />
<input type="button"  class="btn btn-primary btn-lg" onclick="history.back()" value="戻る">
<input type="submit"  class="btn btn-default btn-lg" value="ＯＫ">
</form>
 </div>
 </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>