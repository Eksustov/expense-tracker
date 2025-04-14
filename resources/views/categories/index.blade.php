<!DOCTYPE html>
<html>
<head>
    <title>Kategorijas un to izdevumi</title>
</head>
<body>
    <h1>Kategorijas</h1>
    @foreach($categories as $category)
        <h2 style="color: {{ $category->hex_color }};">
            {{ $category->name }} ({{ $category->hex_color }})
        </h2>
        <ul>
            @foreach($category->expenses as $expense)
                <li>
                    {{ $expense->date }} - {{ $expense->amount }}€ - {{ $expense->notes ?? 'Nav piezīmju' }}
                </li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>