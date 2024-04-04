//Untuk bagian hamburger

const hamburger = document.querySelector('#hamburger');
console.log(hamburger);
hamburger.addEventListener('click', function() {
    console.log('event');
    hamburger.classList.toggle('hamburger-active');
    console.log(hamburger);
});

const cardPerson = document.getElementsByClassName('card-person');
const job = document.getElementById('job');

const wordJob  = [
    'Leadership | Ui Design | UX | Frontend | Backend',
    'Frontend',
    'Backend',
    'Content management',
]
for (let i = 0; i < cardPerson.length; i++) {
    cardPerson[i].addEventListener('mouseover', () => {
        const index = cardPerson[i].getAttribute('data-index');
        job.innerHTML = wordJob[index];
        console.log(index);
    })
}

const messageBar = document.getElementById('message');
messageBar.addEventListener('click', () => {
    messageBar.classList.add('invisible');
})


