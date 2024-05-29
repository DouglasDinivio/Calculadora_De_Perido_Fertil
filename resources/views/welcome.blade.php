<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPF - Calculadora de Periodo Fertil</title>
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
                margin-top: 150px;
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
    style="background: rgb(238,174,202); background: linear-gradient(180deg, rgba(238,174,202,0.48783263305322133) 100%, rgba(148,187,233,0.4906337535014006) 0%); height:100vh;">

    <ul class="nav nav-tabs mt-4">
        
        <img src="{{ asset('images\menstrual-logo.png') }}" alt="menstrual_logo" style="width: 150px"
            class="mx-auto d-block">
    </ul>
    <br>

    <form method="get">
        @csrf

        <div class="center-container">
            <div class="center-content">
                <div class="col-12">
                    <label for="dateInput"><b>Inicio da última menstruação:</b></label>
                </div>
                <div class="input-group mb-4">
                    <input type="date" class="form-control" aria-label="Sizing example input" name="IUPM"
                        aria-describedby="inputGroup-sizing-default">
                </div>

                <div class="col-12">
                    <label for="dateInput"><b>Duração do ciclo menstrual em dias:</b></label>
                </div>
                <div class="input-group mb-4">
                    <input type="#" class="form-control" aria-label="Sizing example input" name="DMCM"
                        aria-describedby="inputGroup-sizing-default">
                </div>

                <div class="input-group mb-8 mt-4">
                    <button type="submit" class="btn btn-red form-control"><b>Calcular</b></button>
                </div>

<br>
                <label><b>Resultado:</b></label>

                <small style="text-align: center">
                    <label><b style="font-weight: 600">Dia da Ovulação : </b> {{ $CálculoDiaOvulação }}</label><br>
                    O seu dia de ovulação é o dia {{ $CálculoDiaOvulação }}, neste dia que durante o ciclo
                    menstrual da mulher o ovário
                    libera um óvulo. Este é o momento em que a
                    mulher é mais fértil e tem a maior
                    probabilidade de engravidar se houver
                    relação sexual desprotegida.
                </small>
<br>


                <small style="text-align: center">
                    <label><b style="font-weight: 600">Período Fértil </b></label> <br>
                    <label><b>Primeiro dia do período fértil :</b> {{ $PrimeiroDiaPeriodoFertil }}</label>
                    <label><b>Último dia do período fértil :</b>{{ $ÚltimoDiaPeriodoFertil }}</label> <br>    
                    O Período Fértil é a janela de tempo no ciclo menstrual em que a mulher tem a maior chance de
                    engravidar. Ele geralmente inclui o dia da ovulação e os cinco dias anteriores, totalizando cerca de
                    seis dias. Durante esse período, os espermatozoides podem sobreviver no corpo da mulher por até
                    cinco dias, e o óvulo permanece viável por cerca de 24 horas após a ovulação
                </small>
                <label> </label>
                <label> </label>
            </div>
        </div>
    </form>
    <div class="center-container">
        <div class="center-content">
        <footer><small>@2024</small></footer>
        </div>
    </div>

</body>

</html>
