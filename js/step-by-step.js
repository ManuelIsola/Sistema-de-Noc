document.addEventListener("DOMContentLoaded", function () {
    const steps = document.querySelectorAll(".orders-steps-progress .step");
    const form = document.getElementById("stepForm");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const submitBtn = document.getElementById("submitBtn");

    let currentStep = 0;
    const fieldsets = form.querySelectorAll("fieldset");

    steps.forEach((step, index) => {
        step.addEventListener("click", function () {
            updateProgress(index);
        });
    });

    prevBtn.addEventListener("click", function () {
        updateProgress(currentStep - 1);
    });

    nextBtn.addEventListener("click", function () {
        if (validateForm()) {
            updateProgress(currentStep + 1);
        }
    });

    form.addEventListener("submit", function (event) {
        event.preventDefault();
        alert("Dados Guardados Com Sucesso!");
    });

    function updateProgress(index) {
        if (index >= 0 && index < fieldsets.length) {
            currentStep = index;
            handleFormVisibility();
            handleButtonVisibility();
            updateStepsProgress();
        }
    }

    function handleButtonVisibility() {
        prevBtn.disabled = currentStep === 0;
        nextBtn.disabled = currentStep === steps.length - 1;
        submitBtn.style.display = currentStep === steps.length - 1 ? "block" : "none";
    }

    function handleFormVisibility() {
        fieldsets.forEach((fieldset, index) => {
            fieldset.classList.toggle("active", index === currentStep);
        });
    }

    function updateStepsProgress() {
        steps.forEach((step, index) => {
            step.parentNode.classList.remove("checked");
            if (index <= currentStep) {
                step.parentNode.classList.add("checked");
            }
        });
    }

    function validateForm() {
        const currentFieldset = fieldsets[currentStep];
        const inputs = currentFieldset.querySelectorAll("input");

        for (let i = 0; i < inputs.length; i++) {
            if (!inputs[i].checkValidity()) {
                alert("Por favor, preencha todos os campos corretamente.");
                return false;
            }
        }

        return true;
    }
});