<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Homework002</title>
</head>
<body>
  <h3>Новый студент</h3>
  <form class="create-form" action="/groups/{{ $group->id }}/students" method="POST">
    @csrf
    <p class="form-label" style="margin: 0 0 5px 0; font-weight: bold;">Группа {{ $group->title }}</p>
    <label class="form-label">Имя
      <input type="text" class="text-input" id="name" name="name">
    </label>
    <label class="form-label">Фамилия
      <input type="text" class="text-input" id="surname" name="surname">
    </label>
    <button type="submit" class="form-button">Сохранить</button>
  </form>
</body>
</html>