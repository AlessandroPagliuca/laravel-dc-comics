import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const deleteButtons = document.querySelectorAll('.delete-btn');
deleteButtons.forEach((btn) => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.getElementById('deleteModal');

        const bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();

        const btnDelete = modal.querySelector('button.btn-danger');

        btnDelete.addEventListener('click', () => {
            btn.parentElement.submit();
        });
    });
});

const validForm = document.querySelectorAll('.valid-form');
validForm.forEach((btn) => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        function validateForm() {
            const titleValue = document.getElementById("title").value.trim();
            const textareaValue = document.getElementById("description").value.trim();
            const thumbValue = document.getElementById("thumb").value.trim();
            const priceValue = document.getElementById("price").value.trim();
            const seriesValue = document.getElementById("series").value.trim();
            const sale_dateValue = document.getElementById("sale_date").value.trim();
            const typeValue = document.getElementById("type").value.trim();

            if (titleValue === "") {
                document.getElementById('titleComic').classList.add('alert-none')
                return false; // blocca l'invio del modulo
            }
            if (textareaValue === "") {
                document.getElementById('descriptionComic').classList.add('alert-none')
                return false; // blocca l'invio del modulo
            }
            if (thumbValue === "") {
                document.getElementById('thumbComic').classList.add('alert-none')
                return false; // blocca l'invio del modulo
            }
            if (priceValue === "") {
                document.getElementById('priceComic').classList.add('alert-none')
                return false; // blocca l'invio del modulo
            }
            if (seriesValue === "") {
                document.getElementById('seriesComic').classList.add('alert-none')
                return false; // blocca l'invio del modulo
            }
            if (sale_dateValue === "") {
                document.getElementById('sale_dateComic').classList.add('alert-none')

                return false; // blocca l'invio del modulo
            }
            if (typeValue === "") {
                document.getElementById('typeComic').classList.add('alert-none')
                return false; // blocca l'invio del modulo
            }
            return true; // permette l'invio del modulo
        }

        // Chiamata alla funzione validateForm()
        if (validateForm()) {
            // Invia il modulo solo se validateForm() restituisce true
            btn.closest('form').submit();
        }
    });
});
