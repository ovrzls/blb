
let httpRequest;
function makeRequest(loc){
    httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = handleRequest;
    httpRequest.open('GET', 'home.php');
    httpRequest.send();

    function handleRequest(){
        console.log("handling the request! "+ loc);
    }
}
window.addEventListener('DOMContentLoaded', (event) => {
    const wedges = document.getElementsByTagName('g');
    const wheel = document.getElementById('wheel');
    const spinme = document.getElementById('btn_spin');
    const max = 22;
    let currUnit = 0;
    for(let wedge of wedges){
        wedge.addEventListener('click', clickHandler, false);
    }
    spinme.addEventListener('click', randSpin, true);
    function randSpin(){
        let unit = (Math.floor(Math.random() * 4) + 1) * (Math.random() < 0.5 ? -1 : 1);
        if( unit != currUnit ){
            rotateWheel(unit);
        } else {
            randSpin();
        }
    }
    function clickHandler(evt) {
        let unit = evt.currentTarget.getAttribute('rel');
        // SET Url from unit maybe a function...
        rotateWheel(unit);
    }
    function rotateWheel(unit) {
        makeRequest("home.php");
        currUnit = unit;
        const degs = ( unit * 40 ) + 20;
        wheel.style.transform = "rotate("+degs+"deg)";
        //console.log("unit = "+unit+", currently = "+currUnit);
    }

});