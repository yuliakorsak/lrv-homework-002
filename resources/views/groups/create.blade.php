<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Homework002</title>
</head>
<body>
  <h3>Новая группа</h3>
  <form action="/groups" class="create-form" method="POST">
    @csrf
    <label class="form-label">Название
      <input type="text" class="text-input" id="title" name="title">
    </label>
    <label class="form-label">Дата начала обучения
      <input type="date" class="text-input" id="start_from" name="start_from">
    </label>
    <label class="form-label">Обучение начато
      <input class="checkbox-input" type="checkbox" name="is_active" id="is_active">
    </label>
    <button class="form-button" type="submit">Сохранить</button>
  </form>
</body>
</html>