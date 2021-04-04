<!DOCTYPE html>
<!-- Comentarios abajo -->
<!--
Aqui sera la ventana general del usuario, aqui tendria que haber:
-Una barra que diga algo tipo: Bienvenido [nombre del usuario]

-Un grafico circular con una cantidad de dinero en medio, siendo la cantidad de enmedio el salario actual del usuario, y el grafico circular
debera mostrar como ese dinero se reparte entre varios gastos, siendo cada uno de un color y que al pasar el puntero sobre este
te diga por ejemplo: "Renta: 2000 pesos mensuales(24 mil pesos al año, o 20% de tu salario actual)". Tambien el menu debera tener la opcion de como visualizar
estos gastos, si el usuario quiere ver los gastos al mes, a la quincena o al año

-Un grafico grande de lineas donde muestre el crecimiento y decrecimiento en los ahorros del usuario conforme este ahorra o gasta su dinero, lineas verdes para
aumento y lineas rojas para perdida
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
        
        <!-- dashboard sidebar -->
        <div class="dashboardSidebar">
            <a href="" class="dashboardSidebarButton"><i class="glyphicon glyphicon-home"></i><br>Inicio</a>
            <a href="" class="dashboardSidebarButton"><i class="glyphicon glyphicon-cog"></i><br>Configuracion</a>
            <a href="" class="dashboardSidebarButton"><i class="glyphicon glyphicon-log-out"></i><br>Cerrar sesion</a>
        </div>
        
        <!-- everything else in the dashboard, the main thing -->
        <div class="dashboardMain">
            
            <!-- Each div from now on represents an element -->
            
            <!-- Grafica 1, grafico de gastos  -->
            <div class="dashboardElement">
                <p><i class="glyphicon glyphicon-info-sign"></i> Gastos mensuales</p>
                <canvas id="expensesChart" width="400" height="400"> </canvas>
            </div> <br> <br>
            
            <!-- MOTD element -->
            <div class="dashboardElement">
                <i class="glyphicon glyphicon-info-sign"></i> MOTD
                <p id="MOTD"></p>
            </div>
            
        </div>
        
        
        <!-- scriptssss -->
        <!-- import chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
        
        <script>
            /* random messages for the tips button */
            const motd = [
                "Ahorrar es lo mas basico que puedes hacer, hazlo porfavor",
                "Los vicios son un desperdicio. Te destruyen a ti y a tu dinero",
                "Comprar cafe es una estafa total, compra una cafetera y aprende a hacer tu propio cafe. Ahorraras muchisimo dinero si sueles tomar cafe regularmente.",
                "Usar este servicio solo funciona con disciplina, registra TODOS tus gastos",
                "El primer paso para mejorar tu situacion economica es ser frugal",
                "No te pongas en deuda, a menos que esto puedas obtener un beneficio de esta"
            ];
            document.getElementById("MOTD").innerHTML = "<p>" + motd[Math.floor(Math.random() * motd.length)] + "</p>";
            
            /* grafica 1 scripts */
            var ctx = "expensesChart";
            
            var labels = ['Servicio de cable', 'Suscripciones', 'Electricidad', 'Agua', 'Comida'];
            var expenses = [1200, 2500, 600, 255, 3000];
            
            /* expenses donut chart itself */
            var expensesChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: labels,
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
                    responsive: false,
                }
                });
            
        </script>
        
        <!-- sidebar styling -->
        <style>
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
            
            /* class that styles an element, an element i define as for example; a circular chart and a line chart are different elements as they are different things with different functions -they are their own thing- */
            .dashboardElement{
                color:#ffd300;
                border-radius:10px;
                box-shadow:6px 6px 9px  #091933;
                padding:50px;
                margin: 0px 0px;
                background-color:#0e274c;
                display:inline-block;
            }
        </style>
        
        
    </body>
</html>
