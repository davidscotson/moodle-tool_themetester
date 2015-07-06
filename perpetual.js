var percentage = 0;
window.setInterval(function () {
    percentage = (percentage + 10) % 110;
    var width = percentage * 5;
    var timeleft = 30 * (100 - percentage) / 100;
    update_progress_bar("perpetual", width, percentage, "perpetual motion", timeleft);
}, 3000);
