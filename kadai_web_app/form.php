<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_web_app</title>
</head>

<body>
    <h2>社員情報入力フォーム</h2>
    <!--  action属性・method属性はフォームの入力内容をサーバー側へ渡すために必要。
      action属性：送信先のPHPファイルを指定
      method属性：「post」を指定 -->
    <form action="confirm.php" method="post">
        <table>
            <tr>
                <td>社員名</td>
                <td>
                    <input type="text" name="employee_name" value="">
                </td>
            </tr>
            <tr>
                <td>年齢</td>
                <td>
                    <input type="text" name="employee_age" value="">
                </td>
            </tr>
            <tr>
                <td>所属部署</td>
                <td>
                    <select name="department">
                        <option value="開発部">開発部</option>
                        <option value="営業部">営業部</option>
                        <option value="人事部">人事部</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="送信">
    </form>
</body>

</html>