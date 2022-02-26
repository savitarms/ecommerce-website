const imgslider = document.getElementById("slider");
const img = document.querySelectorAll("#slider img");

let promo = 0;

function carousel(){
    promo++;

    if(promo > img.length -1){
        promo = 0;
    }

    imgslider.style.transform = `translateX(${-promo * 100}%)`;
}

setInterval(carousel, 5000);