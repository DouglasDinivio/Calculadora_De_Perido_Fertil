<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images\menstrual-logo.png" type="menstrual-logo.png">
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

    <form action="{{ url('/result') }}" method="GET">
        @csrf

        <div class="center-container" style=" color: #A32CC4;">
            <div class="center-content">
                <div class="col-12">
                    <label for="dateInput"><b>Inicio da última menstruação:</b></label>
                </div>
                <div class="input-group mb-4">
                    <input style=" color: #A32CC4;" type="date" class="form-control"
                        aria-label="Sizing example input" name="IUPM" aria-describedby="inputGroup-sizing-default" required>
                </div>

                <div class="col-12">
                    <label for="dateInput"><b>Duração do ciclo menstrual em dias:</b></label>
                </div>
                <div class="input-group mb-4">
                    <input style=" color: #A32CC4;" type="#" class="form-control"
                        aria-label="Sizing example input" name="DMCM" aria-describedby="inputGroup-sizing-default" required>
                </div>

                <div class="input-group mb-8 mt-4">
                    <button type="submit" class="btn btn-red form-control"><b>Calcular</b></button>
                </div>

                <br>
                <small style="text-align: center">
                    <label><b style="font-weight: 600">Benefícios da Calculadora de Período Fértil:</b></label><br>
                    <li><b>Precisão:</b> Algoritmos sofisticados garantem resultados precisos sobre seu período fértil.
                    </li>
                    <li><b>Facilidade de Uso:</b> Interface intuitiva permite inserir dados e obter resultados
                        rapidamente.
                    </li>
                    <li><b>Planejamento Familiar:</b> Aumenta as chances de concepção ao identificar os dias mais
                        férteis.</li>
                    <li><b>Empoderamento:</b> Dá controle e conhecimento sobre seu ciclo menstrual.</li>
                </small>
                <br>

                <small style="text-align: center">
                    <label><b style="font-weight: 600">Por que Usar?</b></label><br>
                    Se você quer tomar decisões informadas sobre sua saúde reprodutiva, a Calculadora de Período Fértil
                    desenvolvida por Douglas Dinivio
                    é a solução ideal. Experimente agora e veja como essa tecnologia pode transformar sua vida. Acesse,
                    insira seus dados e descubra seus dias mais férteis com precisão e facilidade. Faça escolhas
                    informadas para seu futuro hoje mesmo!
                </small>
                <br>
            </div>
        </div>
    </form>

    <div class="center-container">
        <div class="center-content" style=" color: #A32CC4;">
            <footer><small>@2024</small></footer>
        </div>
    </div>

</body>

</html>
