// `printPattern`関数を定義
// 引数にタイトル、行数、列数、パターン生成関数を受け取る
function printPattern(title, rows, columns, pattern) {
  // タイトルと改行を出力
  document.write(title + "<br>");

  // 指定された行数ループ
  for (let i = 0; i < rows; i++) {
    // 現在の行に表示する文字列を格納する変数 `row` を初期化
    let row = "";

    // 指定された列数ループ
    for (let j = 0; j < columns; j++) {
      // pattern関数を呼び出し、i と j を引数に渡す
      // pattern関数の結果を現在の行に追加
      row += pattern(i, j);
    }

    // 現在の行と改行を出力
    document.write(row + "<br>");
  }

  // 改行を出力
  document.write("<br>");
}

printPattern("Question 1", 1, 5, () => "★");
printPattern("Question 2", 2, 3, () => "★");
printPattern("Question 3", 2, 5, () => "☆");
printPattern("Question 4", 4, 5, () => "★");
printPattern("Question 5", 4, 3, () => "★");
printPattern("Question 6", 3, 3, (_, j) => (j % 2 !== 1 ? "★" : "☆"));
printPattern("Question 7", 4, 5, (_, j) => (j % 2 !== 1 ? "★" : "☆"));
printPattern("Question 8", 5, 5, (i, j) => (j <= i ? "★" : ""));