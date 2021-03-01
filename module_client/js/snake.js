window.onload = function(){
    map = document.getElementById('map');
    ctx = map.getContext("2d");
    document.addEventListener("keydown", kontrol);
    setInterval(game, 250); //kecepatan ular  
}

ular_x=ular_y = 7; //titik awal ular
game_setmap=ujung_map = 25;
buah_x = buah_y = 13; //titik awal buah
x_kepala=y_kepala = 0;
jejak = [];
ekor = 1; //awal badan ular

//Score ular
let score = document.getElementById('score');
score.innerText = ekor.length;


function kontrol(tmb){
    switch(tmb.keyCode){
        case 37:   //ular ke kiri
        x_kepala= -1;
        y_kepala= 0;
        break;

        case 38: //ular keatas
        x_kepala= 0;
        y_kepala= -1;
        break;

        case 39: //Ular ke kanan
        x_kepala= 1;
        y_kepala= 0;
        break;

        case 40: //Ular kebawah
        x_kepala= 0;
        y_kepala= 1;
        break;
    }
}

function game(){

    ular_x+=x_kepala;
    ular_y+=y_kepala;

    if(ular_x < 0){
        ular_x = ujung_map -1;
    }
    if(ular_x > ujung_map){
        ular_x = 0;
    }
    if(ular_y < 0){
        ular_y = ujung_map -1;
    }
    if(ular_y > ujung_map){
        ular_y = 0;
    }

    ctx.fillStyle ="#808e9b"; //warna map
    ctx.fillRect(0,0,map.width, map.height);

    ctx.fillStyle = "#ffd32a"; //warna ular
    for(var i = 0; i < jejak.length; i++) {

        ctx.fillRect(jejak[i].x*game_setmap, jejak[i].y*game_setmap, game_setmap-1, game_setmap-1);
        if(jejak[i].x == ular_x && jejak[i].y == ular_y){
            ekor = 6; //panjang ular awal
        }
    }

    jejak.push({x:ular_x, y:ular_y});
    while(jejak.length>ekor){
        jejak.shift();

    }

    if(buah_x==ular_x && buah_y==ular_y){ //ketika ular nabrak buah
        ekor++;
        //Buah random
        buah_x = Math.floor(Math.random()*ujung_map);
        buah_y = Math.floor(Math.random()*ujung_map);
    }

    // if(x_kepala.x == ular_x.x && y_kepala.y== ular_y.y){ //jika ular tabrakan
    //     alert('Game Over');
    // }

    ctx.fillStyle = "rgba(255,255,255,.7)"; //warna buah
    ctx.fillRect(buah_x*game_setmap, buah_y*game_setmap, game_setmap-1, game_setmap-1); //pembatas muncul buah
    
}

//Waktu

var sec = 0;
function pad ( val ) { return val > 9 ? val : "0" + val; }
setInterval( function(){
    document.getElementById("seconds").innerHTML=pad(++sec%60);
    document.getElementById("minutes").innerHTML=pad(parseInt(sec/60,10));
}, 1000);

