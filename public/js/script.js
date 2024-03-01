//Untuk bagian hamburger

const hamburger = document.querySelector('#hamburger');
console.log(hamburger);
hamburger.addEventListener('click', function() {
    console.log('event');
    hamburger.classList.toggle('hamburger-active');
    console.log(hamburger);
});