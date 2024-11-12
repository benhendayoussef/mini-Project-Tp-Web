document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('bookingForm');
    const appointmentsTableBody = document.getElementById('AppointementsTable').querySelector('tbody');

    // Load existing appointments from localStorage and display them in the table
    loadAppointments();

    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevents the form submission

        let isValid = true;

        isValid &= validateField('name', 'Name is required.');
        isValid &= validateEmailField('email', 'Please enter a valid email.');
        isValid &= validateField('bookingType', 'Please select a booking type.');
        isValid &= validateField('reason', 'Please provide a reason or description.');
        isValid &= validateCheckbox('terms', 'Please accept the terms of personal data processing.');

        if (isValid) {
            const appointment = {
                name: document.getElementById('name').value.trim(),
                email: document.getElementById('email').value.trim(),
                bookingType: document.getElementById('bookingType').value,
            };

            saveAppointment(appointment);

            addAppointmentToTable(appointment);

            form.reset();
            resetValidation();

            alert('Form submitted successfully!');
        }
    });

    function validateField(fieldId, errorMessage) {
        const field = document.getElementById(fieldId);
        const errorSpan = document.getElementById(`${fieldId}Error`);
        const iconSpan = document.getElementById(`${fieldId}Icon`);

        if (field.value.trim() === '') {
            errorSpan.textContent = errorMessage;
            errorSpan.style.display = 'inline';
            iconSpan.style.display = 'none';
            return false;
        } else {
            errorSpan.style.display = 'none';
            iconSpan.style.display = 'inline';
            return true;
        }
    }

    function validateEmailField(fieldId, errorMessage) {
        const field = document.getElementById(fieldId);
        const errorSpan = document.getElementById(`${fieldId}Error`);
        const iconSpan = document.getElementById(`${fieldId}Icon`);
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (!emailPattern.test(field.value.trim())) {
            errorSpan.textContent = errorMessage;
            errorSpan.style.display = 'inline';
            iconSpan.style.display = 'none';
            return false;
        } else {
            errorSpan.style.display = 'none';
            iconSpan.style.display = 'inline';
            return true;
        }
    }

    function validateCheckbox(fieldId, errorMessage) {
        const field = document.getElementById(fieldId);
        const errorSpan = document.getElementById(`${fieldId}Error`);

        if (!field.checked) {
            errorSpan.textContent = errorMessage;
            errorSpan.style.display = 'inline';
            return false;
        } else {
            errorSpan.style.display = 'none';
            return true;
        }
    }

    function resetValidation() {
        const errorMessages = document.querySelectorAll('.error-message');
        const icons = document.querySelectorAll('.validation-icon');

        errorMessages.forEach(error => error.style.display = 'none');
        icons.forEach(icon => icon.style.display = 'none');
    }

    function saveAppointment(appointment) {
        const appointments = JSON.parse(localStorage.getItem('appointments')) || [];
        appointments.push(appointment);
        localStorage.setItem('appointments', JSON.stringify(appointments));
    }

    function loadAppointments() {
        const appointments = JSON.parse(localStorage.getItem('appointments')) || [];
        appointments.forEach(addAppointmentToTable);
    }

    function addAppointmentToTable(appointment) {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${appointment.name}</td>
            <td>${appointment.email}</td>
            <td>${appointment.bookingType}</td>
        `;
        appointmentsTableBody.appendChild(row);
    }
});
