var percentage = 0;
window.setInterval(function () {
    percentage = (percentage + 10) % 110;
    var width = percentage * 5;
    updateProgressBar("perpetual", percentage, "Perpetual motion");
}, 3000);
