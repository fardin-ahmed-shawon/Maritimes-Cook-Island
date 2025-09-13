document.addEventListener("DOMContentLoaded", () => {
    const wrapper = document.querySelector(".inline-calendar .calendar-wrapper");
    const toggleBtn = wrapper.querySelector(".toggle-btn");
    const dropdown = wrapper.querySelector(".calendar-dropdown");
    const realDate = wrapper.querySelector(".real-date");

    // Toggle calendar under 📅
    toggleBtn.addEventListener("click", (e) => {
        e.stopPropagation();
        dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
    });

    // Pick date
    realDate.addEventListener("change", () => {
        alert("You picked: " + realDate.value); // replace with your logic
        dropdown.style.display = "none";
    });

    // Close on outside click
    document.addEventListener("click", (e) => {
        if (!wrapper.contains(e.target)) {
            dropdown.style.display = "none";
        }
    });
});