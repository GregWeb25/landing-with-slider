const background = document.getElementById("sandMailBackground");
const sandMailForm = document.getElementById("sandMail")

let isActive = false;

const fastAppointmentButtons = [
    document.getElementById("btnFastAppointmentHeader"),
    document.getElementById("btnFastAppointmentMobil"),
    document.getElementById("btnFastAppointmentSlider"),
]

fastAppointmentButtons.forEach(button => {
        if(button){
            button.addEventListener("click", () => {
                isActive = true;
                if (isActive) {
                    sandMailForm.style.display = "flex";
                } else sandMailForm.style.display = "none";
            })
        }
    }
)

background.addEventListener("click",() => {
    isActive = false;
    if(isActive){
        sandMailForm.style.display = "flex";
    } else sandMailForm.style.display = "none";
}) // логика работы формы отправки email
