<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="master.php" id="student" method="post">
        add student
        <input type="text" name="ln" id="" placeholder="last name">
        <input type="text" name="fn" id="" placeholder="first name">
        <input type="text" name="on" id="" placeholder="other name">
        <input type="text" name="cl" id="" placeholder="student class">
        <input type="text" name="tbl" id="" placeholder="table name">
        <input type="submit" value="add student" name="addstudent">
    </form>


    <form action="master.php" method="post">
        <input type="submit" value="add bursar" name="addbursar">
    </form>


    <form action="master.php" method="post">
        <input type="submit" value="add transaction" name="addtransaction">
    </form>

    <form action="master.php" method="post">
        <input type="submit" value="add fee" name="addschfee">
    </form>
</body>
</html>