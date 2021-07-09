const cardWrapper = document.querySelector('.card-wrapper'),
    popup = document.querySelector('.modal'),
    popupModal = popup.querySelector('.modal__dialog'),
    popupOverlay = popup.querySelector('.modal__overlay');

cardWrapper.addEventListener('click', event => {
    const target = event.target;

    if (target.classList.contains('card__button')) {
        popupOverlay.classList.add('modal__overlay--visible');
        popupModal.classList.add('modal__dialog--visible');
    }
});

popup.addEventListener('click', event => {
    const target = event.target;

    if (target.classList.contains('modal__close') ||
        target.classList.contains('modal__overlay')) {
        popupOverlay.classList.remove('modal__overlay--visible');
        popupModal.classList.remove('modal__dialog--visible');
    }
});