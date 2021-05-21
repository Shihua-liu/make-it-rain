const names = ["Pewdiepie", "Pestily", "Munienio", "Sheeeesh", "KSI", "Logan Paul"];

    function channelNames() {
        for (let counter = 0; counter < 6; counter++) {
        const random = Math.floor(Math.random() * names.length);
        const randomViews = Math.floor(Math.random() * views.length);
        const randomDate = Math.floor(Math.random() * date.length);
        document.getElementsByClassName("channel-name")[counter].innerHTML = names[random];
        document.getElementsByClassName("views")[counter].innerHTML = views[randomViews] + " views";
        document.getElementsByClassName("date")[counter].innerHTML = date[randomDate];
    }}



window.addEventListener("DOMContentLoaded", channelNames);