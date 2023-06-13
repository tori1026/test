<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root", ""); // PDOでデータベースへの接続
$stmt = $pdo->query("SELECT * FROM diworks_keijiban"); // SELECT文でデータベースからデータを取得
?>
    <header>
        <div class="header-top">
            <img src="diblog_logo.jpg" alt="ロゴ">
        </div>
        <div class="header-bottom">
            <nav>
                <ul>
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>D.I.Blogについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="left-column">
            <div class="form-wrapper">
                <h1>入力フォーム</h1>
                <form method="post" action="insert.php">
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" size="35" name="handlename">
                    </div>
                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" class="text" size="35" name="title">
                    </div>
                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea cols="60" rows="7" name="comments"></textarea>
                    </div>
                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>
                </form>
            </div>
            <div>
            <?php
                while ($row = $stmt->fetch()) { //fetchメソッドで次の行を呼び出してrowに格納
                    echo "<div class='post-wrapper'>";
                    echo "<div class='post'>";
                    echo "<h3>".$row['title']."</h3>";
                    echo "<div class='contents'>";
                    echo $row['comments'];
                    echo "</div>";
                    echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
            </div>

        </div>

        <div class="right-column">
            <section class="articles">
                <h3 class="div-line">人気の記事</h3>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>いま人気のエディタTops</li>
                    <li>HTMLの基礎</li>
                </ul>
            </section>

            <section class="links">
                <h3 class="div-line">オススメリンク</h3>
                <ul>
                    <li>ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
            </section>

            <section class="category">
                <h3 class="div-line">カテゴリ</h3>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
            </section>
        </div>
    </main>

    <footer>
        <p>&copy; D.I.works | D.I.blog is the one which provides A to Z about programming</p>
    </footer>
</body>
</html>