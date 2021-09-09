<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <title>ToDos</title>
    </head>
    <body>
        <form action="toDoClone" method="POST">
            <input type="text" name="tdlist" placeholder="What needs to be done?"> <br></br>
        </form>
        <ul>
        @foreach($todolists as $todolist)
            <li>{{$todolists['what_to_do']}}</li>
        @endforeach
        </ul>
    </body>
</html>	