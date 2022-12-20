//CALCULADORA
function limpiar(){
    document.getElementById('formulario').reset();
}

function calcular(){
    var consumo = parseInt(document.getElementById('valor1').value);//Toma los datos del campo uno
    var horas = parseInt(document.getElementById('valor2').value);//Toma los datos del segundo campo
    
    var wAkw = consumo / 1000;//Convierte de watts a kilowatts
    var consU = wAkw * horas;//multiplica los kilowatts x las horas de uso y saca los kw/h

    var cost = consU * 1.5;
    var cost_per_day = cost * 1;
    var cost_per_week = cost_per_day * 7;
    var cost_per_month = cost_per_week * 4;
    var cost_per_year = cost_per_month * 12;
    alert("Tu dispositivo consume:" + " " + consU + " " + "Kw/h");
    alert("Al dia te cuesta: $" + " "+ cost_per_day);
    alert("A la semana te cuesta: $" + " "+ cost_per_week);
    alert("Al mes te cuesta: $" + " "+ cost_per_month);
    alert("Al año te cuesta: $" + " "+ cost_per_year);
}
//FIN CALCULADORA

//MENU ANIMACION
function openMenu(){
    document.getElementById('sideMenu').style.marginLeft = '0';
    document.getElementById('moveArrow').style.marginLeft = '20rem';
}//animacion de apertura de menu



function closeMenu(){
    document.getElementById('sideMenu').style.marginLeft = '-20rem';
    document.getElementById('moveArrow').style.marginLeft = '0';
}//animacion de cerrado del menu





