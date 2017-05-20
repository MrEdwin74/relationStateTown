<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Database</title>

    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/min.estilo.css')!!}

</head>
<body>
    <header>
        <div class="container nav">
            <h1>Database</h1>
        </div>
    </header>
	<div class="container">
            @yield('content') 
        </section>
    </div>

    {!!Html::script('js/bootstrap.min.js')!!}

</body>
</html>