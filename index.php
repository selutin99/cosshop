<!DOCTYPE html>
<html>
    <head>

        <title>Креативный интернет-магазин</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css" >

    </head>
    <body>

        <h1>Hello world!</h1>
        <button type="button" class="btn btn-primary" data-toggle="popover"
                title="Сообщение" data-content="Ура, Bootstrap 4 работает">
            Поднеси ко мне курсор
        </button>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>

        <script>
            $(function () {
                $('[data-toggle="popover"]').popover({trigger:'hover'});
            });
        </script>
    </body>
</html>
