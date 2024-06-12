document.addEventListener('DOMContentLoaded', function () {
    const infoContacto = {
        phone: '+351 912345678',
        email: 'RemaxISEP@gmail.com'
    };

    const infoContactoDiv = document.getElementById('info-contacto');

    if (infoContactoDiv) {
        const phoneElement = document.createElement('p');
        phoneElement.textContent = `Telemovel: ${infoContacto.phone}`;

        const emailElement = document.createElement('p');
        emailElement.textContent = `Email: ${infoContacto.email}`;

        infoContactoDiv.appendChild(phoneElement);
        infoContactoDiv.appendChild(emailElement);
    }

    const helpButton = document.getElementById('help-button');
    if (helpButton) {
        helpButton.addEventListener('click', function () {
            window.location.href = 'Ajuda.html';
        });
    }

    const voltarButton = document.getElementById('voltar-button');
    if (voltarButton) {
        voltarButton.addEventListener('click', function () {
            window.location.href = 'REMAX.html';
        });
    }
});