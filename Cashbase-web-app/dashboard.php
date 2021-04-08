<!DOCTYPE html>
<!--

no se que mas poner aaaaaaaaa

-->
<html>
    <head>
        <title>Cashbase - Inicio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- imports the icons used -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- imports the css on the page -->
        <link rel="stylesheet" href="styles.css">
        
    </head>
    
    <body>
        
        <!-- dashboard user greeting -->
        <div id="greetingTopBar">
            <p id='greetBarUsername'> <p>Bienvenido, </p></p>
        </div>
        
        <!-- dashboard sidebar -->
        <div class="dashboardSidebar">
            <br>
            <a href="" class="dashboardSidebarButton"><i class="glyphicon glyphicon-th"></i><br>Tablero</a><br>
            <a href="" class='dashboardSidebarButton'><i class='glyphicon glyphicon-align-justify'></i><br> Registros</a><br>
            <a href="" class="dashboardSidebarButton"><i class="glyphicon glyphicon-cog"></i><br>Configuracion</a><br>
            <a href="" class="dashboardSidebarButton"><i class="glyphicon glyphicon-log-out"></i><br>Cerrar sesion</a>
        </div> <br>
        
        <!-- everything else in the dashboard -->
        <div class="dashboardMain">
            
            <!-- Grafica 1, grafico de gastos  -->
            <div class="dashboardElement">
                <p class='dashboardElementTitle'><i class="glyphicon glyphicon-calendar"></i> Gastos mensuales</p>
                <canvas id="expensesChart" width="500%" height="550%"></canvas>
                <div id="expensesChartInner">
                    <span>$<span id="expensesChartInnerTotal"></span></span>
                </div>
            </div> 
            
            <!-- grafica 2, ahorros del usuario -->
            <div class='dashboardElement'>
                <p class='dashboardElementTitle'><i class='glyphicon glyphicon-usd'></i> Grafica de ahorros</p>
                <canvas id='savingsChart' width='950%' height="200%"></canvas>
            </div>
            
            <!-- MOTD element -->
            <div class="dashboardElement dashboardElementTitle" style="width:60%">
                <i class="glyphicon glyphicon-education"></i> El tip del dia
                <p id="MOTD" class='dashboardElementTextContent'></p>
            </div>
            
        </div>
        
        
        <!-- scriptssss -->
        <!-- import chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js">
        </script>
        
        <!-- MOTD script -->
        <script>
            const motd = [
                "Ahorrar es lo mas basico que puedes hacer, hazlo porfavor",
                "Los vicios son un desperdicio. Te destruyen a ti y a tu dinero",
                "Comprar cafe es una estafa total, compra una cafetera y aprende a hacer tu propio cafe. Ahorraras muchisimo dinero si sueles tomar cafe regularmente.",
                "Usar este servicio solo funciona con disciplina, registra TODOS tus gastos",
                "El primer paso para mejorar tu situacion economica es ser frugal",
                "Evita ponerte en deuda, a menos que esto pueda traerte un beneficio",
                "Tienes 2 tipos de gastos, necesarios y discrecionales. Los necesarios son aquellos que son obligatorios y no se puede vivir sin estos (comida, agua, electricidad, internet). Y luego los discrecionales(opcionales), estos son cosas que no son necesarias de tener pero tienes la opcion de comprar(cafe, comida de fuera, vicios, mas ropa de la que utilizas)",
                "Deja tu maldito ego a un lado y consigue un buen carro usado. Bajo en consumo de gasolina, mantenimiento facil y con buen seguro",
                "La ropa/calzado de diseñador es un asco. Evitala como la plaga"
            ];
            document.getElementById("MOTD").innerHTML = "<p>" + motd[Math.floor(Math.random() * motd.length)] + "</p>";
        </script>
        
        <!-- gastos mensuales script -->
        <script>
            /* grafica 1 scripts */
            var ctx = document.getElementById("expensesChart");
            
            var labelsExpenses = ['Servicio de cable', 'Suscripciones', 'Electricidad', 'Agua', 'Comida'];
            var expenses = [1200, 2500, 600, 500, 3000];
            
            /* expenses donut chart itself */
            var expensesChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: labelsExpenses,
                    datasets: [{
                            data: expenses,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                    }]
                },
                options: {
                    responsive: false
                }
                });
        </script>
        
        <!-- script to display the number in the middle of the chart above -->
        <script>
            //tenia que inicializar esta variable uhhhhhhhhhhhhhhhhhhhhh
            var totalExpenses = 0;
             
             for(var i = 0; i<expenses.length; i++){
                 totalExpenses = totalExpenses + expenses[i];
             }
             
             document.getElementById("expensesChartInnerTotal").innerHTML = totalExpenses;
             
        </script>
        
        <!-- cantidad de ahorros script -->
        <script>
            var savingsDatesLabels = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ];
            
            var ctxSavings = document.getElementById("savingsChart");
            var savingsChart = new Chart(ctxSavings, {
                type: "line",
                data: {
                    labels: savingsDatesLabels,
                    datasets: [{
                            label: "Ahorros del 2019",
                            data: [7000, 4000, 3300, 4000, 4600, 5000, 4990, 4100, 3200, 3500, 4000, 2300],
                            backgroundColor: "rgba(223, 17, 196, 0.2)",
                            borderColor: "rgba(223, 17, 196, 1)"
                    },
                    {
                        label: "Ahorros del 2020",
                        data: [10000, 9600, 6000, 7000, 6700, 6000, 6600, 5600, 6000, 4000, 4600, 2300],
                        backgroundColor: "rgba(255, 211, 0, 0.2)",
                        borderColor: "rgba(255, 211, 0, 1)"
                    }
                ]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    responsive: false
                }
            });
        </script>
        
        <!-- script de la barra de bienvenido usuario -->
        <script>
            var username;
            document.getElementById("greetBarUsername").innerHTML = username;
        </script>
        
        
        <!-- sidebar styling -->
        <style>
            #greetingTopBar{
                width:100%;
                height:45px;
                background-color:#091933;
            }
            
            #greetingTopBar p{
                float: right;
                color:#ffd300;
                font-size:25px;
                padding-top:5px;
                padding-right:20px;
            }
            
            .dashboardSidebar{
                height:100%;
                width:150px;
                position:fixed;
                z-index:1;
                top:0;
                left:0;
                background-color: #091933;
                overflow-x:hidden;
                padding-top:20px;
            }
            
            .dashboardSidebar a{
                padding: 6px 8px 6px 16px;
                text-decoration: none;
                font-size:20px;
                color:#818181;
                display:block;
            }
            
            .dashboardSidebar a:hover{
                color: #f1f1f1;
            }
            
            .dashboardMain{
                margin-left:160px;
                padding: 0px 10px;
            }
            
            .dashboardSidebarButton{
                text-align:center;
                display:inline-block;
                padding:10px;
            }
            
            .dashboardElementTitle{
                font-size:25px;
            }
            .dashboardElementTextContent{
                font-size:17px;
            }
            
            /* class that styles an element, an element i define as for example; a circular chart and a line chart are different elements as they are different things with different functions -they are their own thing- */
            .dashboardElement{
                color:#ffd300;
                border-radius:10px;
                box-shadow:6px 6px 9px  #091933;
                padding:50px;
                margin: 0px 7px 15px 7px;
                background-color:#0e274c;
                display:inline-block;
                float: left;
            }
            
            #expensesChartInner{
                margin-top:-282px;
                margin-bottom:282px;
                margin-left:35%;
                margin-right:0%;
            }
            
            #expensesChartInner span{
                font-size: 50px;
            }
            
        </style>
        
        
    </body>
</html>
