
document.addEventListener("DOMContentLoaded", function () {

    // Show / Hide Password
    const passwordToggles = document.querySelectorAll(
        "[data-toggle-password]"
    );

    passwordToggles.forEach(function (button) {

        button.addEventListener("click", function () {

            const fieldId = button.getAttribute("data-toggle-password");
            const passwordField = document.getElementById(fieldId);

            if (!passwordField) return;

            if (passwordField.type === "password") {
                passwordField.type = "text";
                button.textContent = "Hide";
            } else {
                passwordField.type = "password";
                button.textContent = "Show";
            }

        });

    });

});


function toggleSidebar() {
    document.getElementById("sidebar").classList.toggle("show");
}

function newProject() {
    document.getElementById("prompt").value = "";
    document.getElementById("prompt").focus();

    document.getElementById("generator").scrollIntoView({
        behavior: "smooth"
    });
}

function searchImages() {

    let query = document.getElementById("search").value.toLowerCase();

    document.querySelectorAll(".image-card").forEach(card => {

        let name = card.dataset.name.toLowerCase();
        let category = card.dataset.category.toLowerCase();

        card.style.display =
            name.includes(query) || category.includes(query)
            ? "" : "none";

    });

}

function filterImages(category, button) {

    document.querySelectorAll(".category").forEach(btn => {
        btn.classList.remove("active");
    });

    button.classList.add("active");

    document.querySelectorAll(".image-card").forEach(card => {

        card.style.display =
            category === "all" ||
            card.dataset.category === category
            ? "" : "none";

    });

}

async function generateImage() {

    let prompt = document.getElementById("prompt").value.trim();

    if (!prompt) {
        alert("Please enter an image description!");
        return;
    }

    let loader = document.getElementById("loader");

    loader.style.display = "block";

    // Connect an AI image generation API here.
    // This frontend demo does not generate real AI images.

    await new Promise(resolve => setTimeout(resolve, 1500));

    loader.style.display = "none";

    alert("Connect an AI API to generate real images.");

}

