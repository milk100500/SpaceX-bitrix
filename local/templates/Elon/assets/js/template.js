'use strict';

/* VARIABLES(START) */
const EMAILVALID = /^[0-9a-z]{1}[\w-\.\+]+[0-9a-z]{1}@[0-9a-z]{1}[\w-\.]+\.[a-z]{2,4}$/i;
const PHONEVALID = /^((\+?[1-9]{1})?[\s\-]?\(?[1-9][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2})$/;
const PHONEHOMEVALID = /^(\+?[1-9]{1}?[\s\-]?\(?[0-9]{2,3}\)?[\s\-]?[0-9]{2,3})$/;
const mars = $('.background_img-mars');
const navList = $('.header_nav');
const startButton = {
    state: false,
    node: document.querySelector('.start_text')
};
const wrapper = $('.wrapper');
const videoMars = $('.video');
const burger = {
    node: $('.burger'),
    state: true,

    changeState() { //Октрытие/закрытие бургера окна
        if (!this.state) {
            this.node.css('display', 'none');
            navList.css('display', 'flex');
        } else {
            this.node.css('display', 'flex');
            navList.css('display', 'none');
        }
        this.state = !this.state;
    }
};

/* VARIABLES(END) */


/* EVENTLISTENERS(START) */


/* BURGER(START) */

burger.node.on('click', () => {
    burger.changeState();
});

wrapper.on('click', (e) => { //Закрытие модального окна/бургера по клику за него.
    if (!burger.state) {
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

/* BURGER(END) */

/* EVENTLISTENERS(END) */