<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

            <style>
            </style>
    </head>
    <body>
        <p class="LidojosaPaparde48">toilet</p>
        <?php 
            use App\Models\Category;
            use App\Models\Expense;

            $category = Category::find(1);
            $expenses = $category->expenses; 

            $expense = Expense::find(1);
            $category = $expense->category;
        ?>
    </body>
</html>
