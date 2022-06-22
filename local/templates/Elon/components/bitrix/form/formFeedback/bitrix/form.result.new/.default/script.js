'use strict';

/* VARIABLES(START) */

const modalButtonForm = $('.button-form');
const modalButtonSend = $('.button-send');
const modalForm = $('.modal__form');
const modalWindow = {
    node: $('.modal__window'),
    state: false,

    changeState() {
        this.state = !this.state;
        if (this.state) {
            modalWindow.node.css('display', 'flex');
            footerButton.css('pointerEvents', 'none');
            modalWindow.node.css('opacity', '1');
            wrapper.css('opacity', '0.5');
            modalWindow.node.css('pointerEvents', 'auto');
        } else {
            footerButton.css('pointerEvents', 'auto');
            modalWindow.node.css('opacity', '0');
            wrapper.css('opacity', '1');
            modalWindow.node.css('pointerEvents', 'none');
        }
    }
};
const footerButton = $('.footer__button');
const inputsArr = [{
    node: $('#user_name .inputtext'),
    state: false,
    value: null
}, {
    node: $('#user_surname .inputtext'),
    state: false,
    value: null
},
{
    node: $('#user_contact .inputtext'),
    state: false,
    value: null
}];

/* VARIABLES(END) */

/* EVENTLISTENERS(START) */

/* MODALSETTINGS(START) */

modalButtonSend.on('click', () => {
    modalButtonForm.remove();
})

inputsArr.forEach((item) => {
    item.node.on('input', () => {
        item.value = item.node.val().trim().replace(/ /g,'');

        if (item.node.parent().prop('id') == 'user_contact') {
            if (EMAILVALID.test(item.value) || PHONEVALID.test(item.value) || PHONEHOMEVALID.test(item.value)) {
                if (checkRepeat(item.value)){
                    item.node.css('outline', 'none');
                    item.state = true;
                } else{
                    item.node.css('outline', '5px solid red');
                    item.state = false;
                }
            } else {
                item.node.css('outline', '5px solid red');
                item.state = false;
            }

        } else {
            if (item.value != ''){
                item.node.css('outline', 'none');
                item.state = true;
            } else {
                item.node.css('outline', '5px solid red');
                item.state = false;
            }
        }
        if (checkState(inputsArr)){
            modalButtonSend.css('pointerEvents', 'auto');
            modalButtonSend.css('background', 'green');
        } else {
            modalButtonSend.css('pointerEvents', 'none');
            modalButtonSend.css('background', 'grey');
        }
    })
})

$('body').on('click', '.button-form', () => { //Открытие формы.
    modalForm.css('display', 'inline');
    modalForm.css('pointerEvents', 'auto');
    $('.button-form').css('display', 'none');
    modalButtonSend.css('display', 'block');
    modalForm.css('display', 'block');
    modalForm.css('pointerEvents', 'auto');
});

$('body').on('click', '.footer__button',() => { //Открытие модального окна.
    modalWindow.node.css('pointerEvents', 'auto');
    modalWindow.changeState();
})

wrapper.on('click', (e) => { //Закрытие модального окна по клику за него.
    if (burger.state) {
        if (e.target.className != 'burger' && e.target.className != 'nav_list') {
            burger.changeState();
        }
    }

    if (e.target.className !== 'footer__button') {
        if (modalWindow.state) {
            modalForm.css('display', 'none');
            modalForm.css('pointerEvents', 'none');
            $('.button-form').css('display', 'block');
            modalButtonSend.css('display', 'none');
            modalForm.css('display', 'none');
            modalWindow.changeState();
        }
    }
})

inputsArr.forEach((item) => {
    item.node.on('input', () => {
        item.value = item.node.val().trim().replace(/ /g,'');

        if (item.node.parent().prop('id') == 'user_contact') {
            if (EMAILVALID.test(item.value) || PHONEVALID.test(item.value) || PHONEHOMEVALID.test(item.value)) {
                if (checkRepeat(item.value)){
                    item.node.css('outline', 'none');
                    item.state = true;
                } else{
                    item.node.css('outline', '5px solid red');
                    item.state = false;
                }
            } else {
                item.node.css('outline', '5px solid red');
                item.state = false;
            }

        } else {
            if (item.value != ''){
                item.node.css('outline', 'none');
                item.state = true;
            } else {
                item.node.css('outline', '5px solid red');
                item.state = false;
            }
        }
        if (checkState(inputsArr)){
            modalButtonSend.css('pointerEvents', 'auto');
            modalButtonSend.css('background', 'green');
        } else {
            modalButtonSend.css('pointerEvents', 'none');
            modalButtonSend.css('background', 'grey');
        }
    })
})

/* FUNCTIONS(END) */

function checkState(arr){
    let globalState = true;
    arr.forEach((item) => {
        globalState = globalState && item.state;
    })
    return globalState;
}

function checkRepeat(str) {
    let symbol = null;
    let strArr = str.split('')
    for (let item of strArr){
        if ((item == '.' || item == '+') && item == symbol){
            return false;
        } else {
            symbol = item;
        }
    }
    return true;
}