<!DOCTYPE html>
<html>
<head>
    <title>Izdevumi un to kategorijas</title>
</head>
<body>
    <h1>Izdevumi</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Datums</th>
                <th>Summa (€)</th>
                <th>Piezīmes</th>
                <th>Kategorija</th>
            </tr>
        </thead>
        <tbody>
            @foreach($expenses as $expense)
                <tr>
                    <td>{{ $expense->date }}</td>
                    <td>{{ $expense->amount }}</td>
                    <td>{{ $expense->notes ?? 'Nav piezīmju' }}</td>
                    <td>{{ $expense->category->name ?? 'Nav kategorijas' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>