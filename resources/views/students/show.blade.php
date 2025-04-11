<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Homework002</title>
</head>
<body>
  <h3>Сведения о студенте<h3>
      <table class="profile">
        <tr>
          <td class="td_left">Имя</td>
          <td>{{ $student->name }}</td>
        </tr>
        <tr>
          <td class="td_left">Фамилия</td>
          <td>{{ $student->surname }}</td>
        </tr>
        <tr>
          <td class="td_left">Группа</td>
          <td>{{ $group_title }}</td>
        </tr>
      </table>
</body>
</html>