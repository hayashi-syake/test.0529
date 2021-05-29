<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @if($index%2 == 0)
    ２の倍数です。
  @elseif($index%3 == 0)
    ３の倍数です。
  @else
    ２の倍数でも３の倍数でもありません。
  @endif
</body>
</html>