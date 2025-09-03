document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('formCadastro');
    const feedbackSuccess = document.getElementById('feedback-success');
    const feedbackError = document.getElementById('feedback-error');

    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            feedbackSuccess.classList.add('d-none');
            feedbackError.classList.add('d-none');

            const nomeServico = document.getElementById('nomeServico').value;
            const descricao = document.getElementById('descricao').value;
            const categoria = document.getElementById('categoria').value;
            const responsavel = document.getElementById('responsavel').value;
            const status = document.getElementById('status').value;

            if (nomeServico === '' || descricao === '' || categoria === '' || responsavel === '' || status === '') {
                feedbackError.classList.remove('d-none');
            } else {
                feedbackSuccess.classList.remove('d-none');
                form.reset();
                setTimeout(() => {
                    const myModalEl = document.getElementById('cadastroModal');
                    const modal = bootstrap.Modal.getInstance(myModalEl);
                    if (modal) {
                        modal.hide();
                    }
                }, 2000);
            }
        });
    }

    // Lógica para avaliação por estrelas na página de detalhes
    const starRatingContainer = document.querySelector('.star-rating');
    if (starRatingContainer) {
        const stars = starRatingContainer.querySelectorAll('i');

        stars.forEach(star => {
            star.addEventListener('click', function() {
                const rating = this.getAttribute('data-rating');
                stars.forEach(s => {
                    if (s.getAttribute('data-rating') <= rating) {
                        s.classList.remove('far');
                        s.classList.add('fas');
                    } else {
                        s.classList.remove('fas');
                        s.classList.add('far');
                    }
                });
            });
        });
    }
});