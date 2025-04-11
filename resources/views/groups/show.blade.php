<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Homework002</title>
</head>
<body>
  <a href="/groups" class="link-back">К списку групп</a>
  <h3>Сведения о группе</h3>
  <table class="group-table">
    <thead>
      <th>Название</th>
      <th>Дата начала обучения</th>
      <th>Обучение начато</th>
    </thead>
    <tr>
      <td>{{ $group->title }}</td>
      <td>{{ $group->start_from }}</td>
      <td>{{ $group->is_active ? 'да' : 'нет' }}</td>
    </tr>
  </table>
  <h3>Список студентов</h3>
  @if (count($students) > 0)
  <ul class="students-list">
    @foreach ($students as $student)
    <li>
      <a href="/groups/{{ $group->id }}/students/{{ $student->id }}">{{ $student->name }} {{ $student->surname }}</a>
    </li>
    @endforeach
  </ul>
  @else
  В группе пока нет студентов.
  @endif
  <a class="link-button" href="/groups/{{ $group->id }}/students/create">Добавить студента</a>
</body>
</html>