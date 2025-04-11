<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Homework002</title>
</head>
<body>
  <h3>Группы</h3>
  <table class="group-table">
    <thead>
      <th>ID</th>
      <th>Название</th>
      <th>Дата начала обучения</th>
      <th>Обучение начато</th>
    </thead>
    @foreach($groups as $group)
    <tr>
      <td>{{ $group->id }}</td>
      <td><a href="/groups/{{ $group->id }}">{{ $group->title }}</a></td>
      <td>{{ $group->start_from }}</td>
      <td>{{ $group->is_active ? 'да' : 'нет' }}</td>
    </tr>
    @endforeach
  </table>
  <a class="link-button" href="/groups/create">Создать новую группу</a>
</body>
</html>