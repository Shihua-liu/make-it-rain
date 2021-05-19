const names = ["Pewdiepie", "Pestily", "Munienio", "Sheeeesh", "KSI", "Jake Paul"];

    function channelNames() {
        for (let counter = 0; counter < 6; counter++) {
        const random = Math.floor(Math.random() * names.length);
        document.getElementsByClassName("channel-name")[counter].innerHTML = names[random];
    }}



window.addEventListener("DOMContentLoaded", channelNames);