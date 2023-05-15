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

const navbar = document.querySelector('nav');
const navbarColors = document.querySelectorAll('#colorContainer div')

navbarColors[0].addEventListener('click', function () {
    navbar.classList.toggle('dark:bg-green-800');
})

navbarColors[1].addEventListener('click', function () {
    navbar.classList.toggle('dark:bg-blue-800');
})

navbarColors[2].addEventListener('click', function () {
    navbar.classList.toggle('dark:bg-stone-800');
})

navbarColors[3].addEventListener('click', function () {
    navbar.classList.toggle('dark:bg-red-800');
})
