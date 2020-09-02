const slider = document.querySelector(".sliderFor").children;
const preview = document.querySelector(".preview");
const next = document.querySelector(".next");
const indicators = document.querySelector(".indicator");
let index = 0;

preview.addEventListener("click", function(){
    previewSlide();
    updateCircleIndicators();
    resetTime();
})

next.addEventListener("click", function(){
    nextSlide();
    updateCircleIndicators();
    resetTime();
})

//circle indicator here
function circleIndicators(){
    for(let i = 0; i<slider.length; i++){
        const div = document.createElement("div");
        div.innerHTML = i + 1;
        div.setAttribute("onclick", "indicateSlide(this)")
        div.id = 1;
        if(i==0){
            div.className = "active";
        }
        indicators.appendChild(div);
    }
}
circleIndicators();

function indicateSlide(element){
    index = element.id;
    changeSlide();
    updateCircleIndicators();
    resetTime();
}

function updateCircleIndicators(){
    for(let i = 0; i<indicators.children.length;i++){
        indicators.children[i].classList.remove("active");
    }
    indicators.children[index].classList.add("active");
}

function previewSlide(){
    if(index == 0){
        index == slider.length-1;
    }
    else{
        index--;
    }
    changeSlide();
}

function nextSlide(){
    if(index == slider.length-1 ){
        index == 0;
    }
    else{
        index++;
    }
    changeSlide();
}

function changeSlide(){
    for(let i=0; i<slider.length;i++){
        slider[i].classList.remove("active");
    }
    slider[index].classList.add("active");
}

function resetTime(){
    clearInterval(time);
    time = setInterval(autoPlay, 4000);
}

function autoPlay(){
    nextSlide();
    updateCircleIndicators();
}

let time = setInterval(autoPlay, 4000);

//sliderEnd