document.addEventListener("DOMContentLoaded", () => {
    const wrapper = document.querySelector(".inline-calendar .calendar-wrapper");
    if (!wrapper) return; // stop if wrapper not found

    const toggleBtn = wrapper.querySelector(".toggle-btn");
    const dropdown = wrapper.querySelector(".calendar-dropdown");
    const realDate = wrapper.querySelector(".real-date");

    if (toggleBtn && dropdown) {
        toggleBtn.addEventListener("click", (e) => {
            e.stopPropagation();
            dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
        });
    }

    if (realDate && dropdown) {
        realDate.addEventListener("change", () => {
            alert("You picked: " + realDate.value);
            dropdown.style.display = "none";
        });
    }

    document.addEventListener("click", (e) => {
        if (wrapper && dropdown && !wrapper.contains(e.target)) {
            dropdown.style.display = "none";
        }
    });
});
