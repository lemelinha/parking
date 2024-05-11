<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->title ?></title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">

        </div>
        <div class="row">
            <div class="col-sm-3">
                <button class="btn btn-success btn-block btn-lg font-weight-bolder" >
                    <i class="bi bi-ticket-detailed"></i>
                    Abrir Ticket
                </button>
            </div>
            <?php $this->loadView() ?>
        </div>
    </div>
</body>
</html>