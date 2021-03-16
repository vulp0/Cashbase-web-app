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
        <title>Cashbase - Tablero</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
            <div class="dashboardElement"><i class="glyphicon glyphicon-info-sign"></i> Hamana hamana hamana hamana hamana hamana hamana hamana hamana hamana hamana hamana </div> <br>
            <div style="font-size:50px;" class="dashboardElement"><i class="glyphicon glyphicon-modal-window" ></i>AMONGUS</div>
        </div>
        
        <!-- scriptssss -->
        <script src="C:\Users\Equipo\node_modules\chart.js\dist\Chart.js"></script>
        
        <script>
            var lineChart = new Chart(ctx, {
                type: 'line',
                data: data,
                options: options
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
            }
        </style>
        
        
    </body>
</html>
