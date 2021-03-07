const red = document.getElementById('red');
const green = document.getElementById('green');
const blue = document.getElementById('blue');
const hasil = document.getElementById('hasil');

ubahWarna();

function ubahWarna(){
    const merah = parseInt(red.value, 10).toString(16);
    const hijau = parseInt(green.value, 10).toString(16);
    const biru = parseInt(blue.value, 10).toString(16);

    //ubah backgrundcolor
    const bgHasil = '#'+pad(merah)+pad(hijau)+pad(biru);
    hasil.style.backgroundColor = bgHasil;

    //ambil value rgb hex
    const rgb_hex = `rbg(${red.value}, ${green.value}, ${blue.value})`;
    hasil.innerText = rgb_hex;
}

function pad(n){
    return (n.length>2)? "n"+n:n;
}

red.addEventListener('change', function(){
    ubahWarna();
});

red.addEventListener('input', function(){
    ubahWarna();
});

green.addEventListener('change', function(){
    ubahWarna();
});

green.addEventListener('input', function(){
    ubahWarna();
});

blue.addEventListener('change', function(){
    ubahWarna();
});

blue.addEventListener('input', function(){
    ubahWarna();
});




