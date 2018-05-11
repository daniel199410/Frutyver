var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
        datasets: [{
            label: 'Ventas semanales',
            data: [12, 19, 3, 5, 2, 3, 9],
            backgroundColor: [
                'rgb(33, 150, 243)',
                'rgb(33, 150, 243)',
                'rgb(33, 150, 243)',
                'rgb(33, 150, 243)',
                'rgb(33, 150, 243)',
                'rgb(33, 150, 243)',
                'rgb(33, 150, 243)'
            ]
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

var ctx = document.getElementById("yearChart");
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
        datasets: [{
            label: 'Ventas anuales',
            data: [12000, 19000, 3000, 5000, 20000, 3000, 9000, 8000, 10000, 5000, 8900, 14000],
            backgroundColor: [
                'rgb(33, 150, 243)'
            ]
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});