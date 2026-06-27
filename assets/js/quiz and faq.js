// Скрипт для FAQ (Аккордеон)
const faqQuestions = document.querySelectorAll('.faq-question');
faqQuestions.forEach(question => {
    question.addEventListener('click', () => {
        const item = question.parentElement;
        const answer = item.querySelector('.faq-answer');
        
        if (item.classList.contains('active')) {
            answer.style.maxHeight = null;
            item.classList.remove('active');
        } else {
            // Закрываем другие открытые вкладки (опционально)
            document.querySelectorAll('.faq-item.active').forEach(openItem => {
                openItem.querySelector('.faq-answer').style.maxHeight = null;
                openItem.classList.remove('active');
            });
            
            answer.style.maxHeight = answer.scrollHeight + "px";
            item.classList.add('active');
        }
    });
});

// Скрипт для связки квиза с формой заказа
const quizBtn = document.getElementById('quiz-submit-btn');
if(quizBtn) {
    quizBtn.addEventListener('click', () => {
        const purpose = document.querySelector('input[name="q_purpose"]:checked').value;
        const selectForm = document.querySelector('select[name="lantern_type"]');
        if(selectForm) {
            if(purpose === "Охота") selectForm.value = "Охотник";
            else if(purpose === "Рыбалка") selectForm.value = "Рыбак";
            else selectForm.value = "Поисковик";
        }
    });
}
