<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CHOACHTECH</title>
</head>

<body>
  <p>{{$txt}}</p>
  @if (count($errors) > 0)
    <p>入力に問題があります</p>
    <!-- <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul> -->
    @endif
  <form action="/hello" method="POST">
  <table>
    @csrf
    @if($errors->has('txt'))
      <tr>
        <th>ERROR</th>
        <td>{{$errors->first('txt')}}</td>
      </tr>
    @enderror
    <tr>
      <th>txt:</th>
      <td>
        <input type="text" name="txt" value="{{ old('txt') }}">
      </td>
    </tr>
  </table>
  <input type="submit" value="送信">
</form>
</body>
</html>