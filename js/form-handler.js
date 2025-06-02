document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('contact-page-form').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        formData.append('action', 'contact_form');
        formData.append('nonce', ajax_object.nonce);

        fetch(ajax_object.ajax_url, {
            method: 'POST',
            body: formData
        })
            .then(response => response.text())
            .then(data => {
                document.getElementById('contact-page-form').style.display = 'none';
                document.getElementById('contact-form-title').style.display = 'none';
                document.getElementById('contact-page-form').style.display = 'none';
                document.getElementById('contact-form-message').innerHTML = '<p class="success">Message envoyé avec succès!</p>';
            })
            .catch(error => {
                document.getElementById('contact-form-message').innerHTML = '<p class="error">Erreur lors de l\'envoi</p>';
            });
    });
});