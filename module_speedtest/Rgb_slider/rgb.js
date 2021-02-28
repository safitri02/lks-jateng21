const red = document.getElementById('red')
const green = document.getElementById('green')
const blue = document.getElementById('blue')
const hasil_warna = document.getElementById('hasil_warna')

ubahWarna()

function ubahWarna(){
    const merah = parseInt(red.value,10).toString(16);
    const hijau = parseInt(green.value,10).toString(16);
    const biru = parseInt(blue.value,10).toString(16);

    //ganti background
    const hex_color = '#'+pad(merah)+pad(hijau)+pad(biru);
    hasil_warna.style.backgroundColor = hex_color;

    //mengambil value
    const rgb_hex = `rgb(${red.value}, ${green.value}, ${blue.value})`;
    hasil_warna.innerText= rgb_hex;
    
}

function pad(n){
    //namanya ternary function
    //jika kurang dari 2 maka tambahkan 0 di depannya
    return (n.length>2) ? "0"+n:n; 
}

red.addEventListener('change', function(){
    ubahWarna()
})
red.addEventListener('input', function(){
    ubahWarna()
})

green.addEventListener('change', function(){
    ubahWarna()
})
green.addEventListener('input', function(){
    ubahWarna()
})

blue.addEventListener('change', function(){
    ubahWarna()
})
blue.addEventListener('input', function(){
    ubahWarna()
})

