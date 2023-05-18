//profile page
// dropdown header
const hamburIcon = document.getElementById('hamburgerIcon');
const mainProfile = document.querySelector('main');

hamburIcon.addEventListener('click', function () {
    mainProfile.classList.toggle('scale-y-0')
})

//clear input
const formProfile = document.querySelector('form');
const inputs = document.querySelectorAll('form input');
const deleteFieldsBtn = document.getElementById('deleteFields');
const cancelDeleteBtn = document.getElementById('cancelDelete');
// const formButtons = document.querySelectorAll('#formButtons span');

// deleteFieldsBtn.addEventListener('click', function () {

//     if (inputs[2].value !== '' & inputs[3].value !== '' & inputs[4].value !== '' & inputs[5].value !== '' & inputs[6].value !== '') {
//         inputs[2].value = "";
//         inputs[3].value = "";
//         inputs[4].value = "";
//         inputs[5].value = "";
//         inputs[6].value = "";

//         inputs[3].value = inputs[2].value;
//         inputs[3].value = inputs[3].value;
//         inputs[4].value = inputs[4].value;
//         inputs[5].value = inputs[5].value;
//         inputs[6].value = inputs[6].value;
//     }   
// })

// localStorage.setItem('green', 'dark:bg-green-800')

// const navbar = document.querySelector('nav');

// let colors = [];

// localStorage.setItem('color', JSON.stringify(colors));

// let color = localStorage.getItem('color')

// if (!color) {
//     color = 'dark:bg-green-800'
//     localStorage.setItem('color', color)
// }

// navbar.classList.toggle(color)

// const navbarColors = document.querySelectorAll('#colorContainer div')


// navbarColors[1].addEventListener('click', function () {
//     navbar.classList.add('dark:bg-blue-800');
// })

// navbarColors[2].addEventListener('click', function () {
//     navbar.classList.add('dark:bg-stone-800');
// })

// navbarColors[3].addEventListener('click', function () {
//     navbar.classList.add('dark:bg-red-800');
// })

