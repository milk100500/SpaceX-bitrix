'use strict';

/* VARIABLES(START) */
const inputsArrContacts = [{
    node: $('#user_name_contact .inputtext'),
    state: false,
    value: null
}, {
    node: $('#user_phone_contact .inputtext'),
    state: false,
    value: null
},
    {
        node: $('#user_email_contact .inputtext'),
        state: true,
        value: ''
    }];
const modalButtonSendContacts = $('.contacts_form-button');

/* VARIABLES(END) */

/* EVENTLISTENERS(START) */

/* MODALSETTINGS(START) */

inputsArrContacts[1].node.mask("0 (000) 000-00-00");


if (EMAILVALID.test(inputsArrContacts[2].value)) {
    if (checkRepeat(inputsArrContacts[2].value)){
        inputsArrContacts[2].node.css('outline', 'none');
        inputsArrContacts[2].state = true;
    } else{
        inputsArrContacts[2].node.css('outline', '5px solid red');
        inputsArrContacts[2].state = false;
    }
} else {
    if (inputsArrContacts[2].value == ''){
        inputsArrContacts[2].node.css('outline', 'none');
        inputsArrContacts[2].state = true;
    } else {
        inputsArrContacts[2].node.css('outline', '5px solid red');
        inputsArrContacts[2].state = false;
    }
}


inputsArrContacts.forEach((item) => {
    item.node.on('input', () => {
        let valArr = String(item.node.val().trim().replace(/ /g,'')).split('');
        item.value = item.node.val().trim().replace(/ /g,'');
        item.node.val('+' + item.value);

        if (item.node.parent().prop('id') == 'user_email_contact') {
            if (EMAILVALID.test(item.value)) {
                if (checkRepeat(item.value)){
                    item.node.css('outline', 'none');
                    item.state = true;
                } else{
                    item.node.css('outline', '5px solid red');
                    item.state = false;
                    item.node.val(item.value);
                }
            } else {
                if (item.value == ''){
                    item.node.css('outline', 'none');
                    item.state = true;
                } else {
                    item.node.css('outline', '5px solid red');
                    item.state = false;
                    item.node.val(item.value);
                }
            }

        } else if(item.node.parent().prop('id') == 'user_phone_contact') {
            if (PHONEVALID.test(item.value) || PHONEHOMEVALID.test(item.value)){
                if (checkRepeat(item.value)){
                    item.node.css('outline', 'none');
                    item.state = true;
                } else{
                    item.node.css('outline', '5px solid red');
                    item.state = false;
                    item.node.val(item.value);

                }
            } else {
                item.node.css('outline', '5px solid red');
                item.state = false;
                item.node.val(item.value);

            }
        } else {
            if (item.value != ''){
                item.node.css('outline', 'none');
                item.state = true;
            } else {
                item.node.css('outline', '5px solid red');
                item.state = false;
                item.node.val(item.value);

            }
        }
        if (checkState(inputsArrContacts)){
            modalButtonSendContacts.css('pointerEvents', 'auto');
            modalButtonSendContacts.css('background', 'green');
        } else {
            modalButtonSendContacts.css('pointerEvents', 'none');
            modalButtonSendContacts.css('background', 'grey');
        }
    })
})

/* MODALSETTINGS(END) */