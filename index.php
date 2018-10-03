<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Форма заказа</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <h1 class="text-center text-uppercase">Сделать заказ</h1>

        <div class="row">
            <div class="col-xs-10 col-md-4 col-xs-offset-1 col-md-offset-4 text-center">
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".modal-contact-form">Сделать заказ</button>
            </div><!-- /.col-sm-10 col-md-4 col-sm-offset-1 col-md-offset-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <div class="modal fade modal-contact-form" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center text-uppercase">Оставить заявку!</h4>
                </div><!-- /.modal-header -->

                <div class="modal-body">
                    <form action="application.php" method="POST">
                        <div class="form-group">
                            <label class="sr-only" for="name">Ваше Имя:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </div><!-- /.input-group-addon -->
                                <input type="text" name="name" class="form-control" placeholder="Ваше Имя" required>
                            </div><!-- /.input-group -->
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label class="sr-only" for="phone">Ваш номер телефона:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-phone"></span>
                                </div><!-- /.input-group-addon -->
                                <input type="tel" name="phone" class="form-control" maxlength="17" placeholder="Номер телефона" required>
                            </div><!-- /.input-group -->
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" value="Оставить заявку">
                        </div><!-- /.form-group -->
                    </form>
                </div><!-- /.modal-body -->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog modal-sm -->
    </div><!-- /.modal fade modal-contact-form -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/inputmask/inputmask.js"></script>
    <script src="js/inputmask/inputmask.extensions.js"></script>
    <script src="js/inputmask/inputmask.numeric.extensions.js"></script>
    <script src="js/inputmask/inputmask.date.extensions.js"></script>
    <script src="js/inputmask/inputmask.phone.extensions.js"></script>
    <script src="js/inputmask/jquery.inputmask.js"></script>
    <script src="js/inputmask/phone-codes/phone.js"></script>
    <script src="js/inputmask/phone-codes/phone-be.js"></script>
    <script src="js/inputmask/phone-codes/phone-ru.js"></script>
    <script>
        $(document).ready(function () {
            $('[type="tel"]').inputmask({"mask": "38(999) 999-99-99"}); //specifying options
        });
    </script>

</body>
</html>