// Defining elements for modal boxes.
const openModalButtons = document.getElementsByClassName('project__p-button');
const closeModalButtons = document.getElementsByClassName('modal-box__close-button');
const modalBoxes = document.getElementsByClassName('modal-back__modal-box');
const modalBackground = document.getElementById('modalBackground');

// GSAP timeline to open modal boxes.
var openModalBoxAni = gsap.timeline({ paused: true });
openModalBoxAni.set(modalBackground, { visibility: 'visible' });
openModalBoxAni.to(modalBackground, .3, { opacity: 1 });

// Function that gives every modal box an index attribute.
function setDataIndex() {
    for (var i = 0; i < openModalButtons.length; i++) {
        openModalButtons[i].setAttribute('data-index', i);
        modalBoxes[i].setAttribute('data-index', i);
        closeModalButtons[i].setAttribute('data-index', i);
    }
}

// Function that opens the modal box.
function openModal(modalBox) {
    openModalBoxAni.play();
    gsap.set(modalBox, { visibility: 'visible' });
    gsap.to(modalBox, .3, { opacity: 1 });
}

// Function that closes the open modal box.
function closeModal(modalBox) {
    openModalBoxAni.reverse();
    gsap.to(modalBox, .3, { opacity: 0 });
    gsap.set(modalBox, { visibility: 'hidden', delay: .5 });
}

// Function that returns the index attribute of the given modal box.
function getModalBoxIndex(i) {
    return i.getAttribute('data-index');
}

// Loop through the buttons that opens the modal boxes, give them click trigger events
// to open and close the modal boxes.
for (var i = 0; i < openModalButtons.length; i++) {
    openModalButtons[i].onclick = function () {
        var modalBoxIndex = getModalBoxIndex(this);
        openModal(modalBoxes[modalBoxIndex]);
    };

    closeModalButtons[i].onclick = function () {
        var modalBoxIndex = getModalBoxIndex(this);
        closeModal(modalBoxes[modalBoxIndex]);
    };
}

// --COULD-HAVE: Background clickable to hide modal box.--
// window.onclick = function (event) {
//     for (var i = 0; i < modalBoxes.length; i++) {
//         if (modalBoxes[i].style.visibility === 'visible') {
//             var modalBoxIndex = getModalBoxIndex(modalBoxes[i]);
//             closeModal(modalBoxes[modalBoxIndex]);
//         }
//     }
// };

// When the page has loaded, call the setDataIndex function.
window.onload = () => {
    setDataIndex();
};
