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
// const formButtons = document.querySelectorAll('#formButtons span');

deleteFieldsBtn.addEventListener('click', function () {

    inputs[3].value = ''
    inputs[4].value = ''
    inputs[5].value = ''
    inputs[6].value = ''
    
})

