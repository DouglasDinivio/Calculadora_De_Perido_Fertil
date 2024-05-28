<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Centralização</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
        }

        .center-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 50vh;
        }

        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 2%;
            margin-right: 2%;
        }

        .input-group.mb-4:hover input[type="number"].form-control {
            border-color: rgb(205, 48, 177);
        }

        @media (max-width: 576px) {
            .nav-tabs {
                padding: 10px;
            }
        }

        .btn-red {
            background-color: rgb(219, 121, 178);
            border-color: rgb(196, 86, 150);
            color: white;
        }

        .btn-red:hover {
            border-color: rgb(205, 48, 177);
            border-color: rgb(205, 48, 177);
        }

        .footer {
            text-align: center;
            justify-content: center;
        }
    </style>
</head>

<body
    style="background: rgb(238,174,202); background: linear-gradient(0deg, rgba(238,174,202,0.48783263305322133) 0%, rgba(148,187,233,0.4906337535014006) 100%);">

    <ul class="nav nav-tabs">
        <img src="{{ asset('images/menstrual-logo.png') }}" alt="menstrual_logo" style="width: 150px"
            class="mx-auto d-block">
    </ul>

    <form method="get">
        @csrf

        <div class="center-container">
            <div class="center-content">
                <div class="col-12">
                    <label for="dateInput"><b>IUPM</b></label>
                </div>
                <div class="input-group mb-4">
                    <input type="date" class="form-control" aria-label="Sizing example input" name="IUPM"
                        aria-describedby="inputGroup-sizing-default">
                </div>

                <div class="col-12">
                    <label for="dateInput"><b>DMCM</b></label>
                </div>
                <div class="input-group mb-4">
                    <input type="number" class="form-control" aria-label="Sizing example input" name="DMCM"
                        aria-describedby="inputGroup-sizing-default">
                </div>

                <div class="input-group mb-8 mt-4">
                    <button type="submit" class="btn btn-red form-control"><b>Calcular</b></button>
                </div>

                <h3></h3>
                <label> <b>IUPM :</b> {{ $IUPM }}</label>
                <label> <b>IUPM :</b> {{ $DMCM }}</label>
            </div>
        </div>
    </form>

  
</body>

</html>
