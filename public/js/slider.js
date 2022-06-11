const container = document.querySelectorAll(".range_slider");

let slider;
let thumb;
let tooltip;
let progress;

for (let i = 0; i < container.length; i++) {
    slider = container[i].querySelector(".slider");
    thumb = container[i].querySelector(".slider_thumb");
    tooltip = container[i].querySelector(".tooltip");
    progress = container[i].querySelector(".progress");
    
}

function customSlider(){
    const maxVal = slider.getAttribute("max");
    const val = (slider.value / maxVal) * 100 + "%";

    tooltip.innerHTML = slider.value;

    progress.style.width = val;
    thumb.style.left = val; 
}

customSlider();

slider.addEventListener("input", () => {
    customSlider();
})