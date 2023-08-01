/**
 * DHL Express
 *
 * @author  Jay Trees <dhlexpress@grandels.email>
 * @link    https://github.com/grandeljay/modified-dhl-express
 * @package GrandeljayDhlExpress
 */
"use strict";

function DOMContentLoaded() {
    addEventListenerButtonRemove();
    addEventListenerButtonAdd();
}

document.addEventListener('DOMContentLoaded', DOMContentLoaded);

function addEventListenerButtonRemove() {
    let buttonsRemove = document.querySelectorAll('button.remove');

    function buttonRemoveClick() {
        let buttonRemove = this;

        buttonRemove.parentNode.parentNode.remove();
    }

    buttonsRemove.forEach(buttonRemove => {
        buttonRemove.addEventListener('click', buttonRemoveClick);
    });
}
