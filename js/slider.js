const section = document.getElementById("sliderSection");
const slider = document.getElementById("slider");

const checkupsFromPhp = slider.dataset.checkups;

function formatCheckups(notFormatedData){
    let formatedData = [];
    if(notFormatedData.length === 0){
        return [];
    }
    try{
        formatedData = JSON.parse(notFormatedData.replaceAll("'","\""));
    } catch (e) {
        console.error("Data has been corrupted, error: " + e.message);
    }
    return formatedData;
} // небольшие костыли, php не хотел отдавать JSON

const checkups = formatCheckups(checkupsFromPhp);


let slidNumber = 0; // номер текущего слайда

if (checkups.length === 0) {
    section.style.display = "none";
} // проверка на отсутствие слайдов

function moveSlides(){
    const line = document.getElementById("line");
    if(line){
        line.style.left = `-${slidNumber*100}%`
    }
} // смена слайда

function nextSlide() {
    if (slidNumber + 1 < checkups.length) {
        slidNumber++;
    } else slidNumber = 0;
    renderSliderSwitch();
    moveSlides();
} // переключение слайда вперёд

function prevSlide() {
    if (slidNumber === 0) {
        slidNumber = checkups.length - 1;
    } else slidNumber--;
    renderSliderSwitch();
    moveSlides();
} // переключение слайда назад

function  renderSliderSwitch(){
    const template =`
            <button id="sliderSwitchButtonLeft">
                <img src="public/svg/arrow_l.svg" alt="left arrow">
            </button>
            <div>
                ${slidNumber + 1}<span class="slider_count">/${checkups.length}</span>
            </div>
            <button id="sliderSwitchButtonRight">
                <img src="public/svg/arrow_r.svg" alt="right arrow">
            </button>
    `
    let sliderSwitch = document.getElementById("sliderSwitch");
    if(sliderSwitch){
        sliderSwitch.innerHTML = template;
    } else {
        sliderSwitch = document.createElement("div");
        sliderSwitch.className = "slider_switch";
        sliderSwitch.id = "sliderSwitch";
        sliderSwitch.innerHTML = template;
        section.appendChild(sliderSwitch);
    }
    const arrowLeft = document.getElementById("sliderSwitchButtonLeft");
    const arrowRight = document.getElementById("sliderSwitchButtonRight");
    arrowLeft.addEventListener("click", () => prevSlide());
    arrowRight.addEventListener("click", () => nextSlide());
} // отрисовка переключателя слайдов

function renderSlider() {
    let line = document.createElement("div");
    line.className = "line";
    line.id = "line";
    slider.appendChild(line);
    for (let i = 0; i < checkups.length; i++) {
        const slideContent = `
            <div class="slider_content">
                <div class="slider_info">
                    <h1>CHECK-UP</h1>
                    <span>${checkups[i].name}</span>
                    <ul id="list${i}"></ul>
                </div>
                <div class="slider_cost">
                    <span>Всего ${checkups[i].price.new}₽</span>
                    <s>${checkups[i].price.old}₽</s>
                </div>
                <div class="slider_btn-container">
                        <button id="btnFastAppointmentSlider"  class="btn-fast-appointment">
                            Записаться
                        </button>
                        <button class="btn-fast-appointment outline">
                            Подробнее
                        </button>
                </div>
            </div>
            <img src=${checkups[i].image.path} alt=${checkups[i].image.alt}>
        `;
        const slide = document.createElement("div");
        slide.className = "slide";
        slide.innerHTML = slideContent;
        line = document.getElementById("line");
        line.appendChild(slide);
        for (let j = 0; j < checkups[i].list.length; j++) {
            const listItem = document.createElement("li");
            const text = document.createElement("span");
            text.textContent = checkups[i].list[j];
            listItem.appendChild(text);
            document.getElementById(`list${i}`).appendChild(listItem);
        }
    }
    renderSliderSwitch();
} // отрисовка самого слайдера

renderSlider();


setInterval(() => nextSlide(), 3000); // автоматическое переключение слайдов