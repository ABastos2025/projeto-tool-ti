function toggleTheme() {
    const checkbox = document.getElementById("switchTheme");

    document.body.classList.toggle("dark", checkbox.checked);

    if (checkbox.checked) {
        localStorage.setItem("tema", "dark");
    } else {
        localStorage.setItem("tema", "light");
    }
}

window.onload = function() {
    const tema = localStorage.getItem("tema");
    const checkbox = document.getElementById("switchTheme");

    if (tema === "dark") {
        document.body.classList.add("dark");
        checkbox.checked = true;
    }
};