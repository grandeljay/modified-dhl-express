/**
 * DHL Express
 *
 * @author  Jay Trees <dhlexpress@grandels.email>
 * @link    https://github.com/grandeljay/modified-dhl-express
 * @package GrandeljayDhlExpress
 */

"use strict";

function DOMContentLoaded() {
    const observerOptions  = {
        'root'      : null,
        'threshold' : 0
    };
    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const textarea = entry.target;

                textarea.setAttribute('readonly', 'readonly');

                const url     = textarea.getAttribute('data-url');
                const options = {
                    'method'  : 'POST',
                    'headers' : {
                        'Content-Type' : 'application/json',
                        'Accept'       : 'text/html',
                    },
                    'body'    : JSON.stringify({
                        'json' : textarea.value
                    })
                };

                fetch(url, options)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(`Network response was not ok: ${response.status}`);
                        }

                        return response.text();
                    })
                    .then(html => {
                        textarea.style.display = 'none';
                        textarea.insertAdjacentHTML('afterend', html);
                    })
                    .catch(error => {
                        console.error('Fetch error:', error);
                    })
                    .finally(() => {
                        textarea.removeAttribute('readonly');
                    });
            }
        });
    };
    const observer         = new IntersectionObserver(observerCallback, observerOptions);

    let apiElements = document.querySelectorAll('[data-url]');

    apiElements.forEach(apiElement => {
        observer.observe(apiElement);
    });
}

document.addEventListener('DOMContentLoaded', DOMContentLoaded);

function documentChange(event) {
    function inputWeightChange() {
        let table     = this.closest('table');
        let tableRows = table.querySelectorAll('tbody > tr');
        let tableData = [];

        let apiElement = this.closest('details').querySelector('[data-url]');

        console.log(apiElement);

        tableRows.forEach(tableRow => {
            let inputWeightMax   = tableRow.querySelector('[data-name="weight-max"]');
            let inputWeightCosts = tableRow.querySelector('[data-name="weight-costs"]');

            tableData.push({
                'weight-max'   : inputWeightMax.value,
                'weight-costs' : inputWeightCosts.value
            });
        });

        apiElement.value = JSON.stringify(tableData);
    }

    if (event.target.matches('[data-name]')) {
        inputWeightChange.call(event.target);
    }
}

document.addEventListener('change', documentChange);
