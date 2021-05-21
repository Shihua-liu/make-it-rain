const names = ["Pewdiepie", "Pestily", "Munienio", "Sheeeesh", "KSI", "Jake Paul"];
const views = ["12K", "1 mln", "50 mln", "5K", "100K", "20K", "238", "914"];
const date = ["1 week ago", "20 minutes ago", "1 hour ago", "36 minutes ago", "5 days ago", "1 month ago"];

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