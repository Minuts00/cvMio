import './bootstrap';
import 'bootstrap';

const memojiCard = document.querySelector('#memoji-card');

if (memojiCard) {
    const pupils = memojiCard.querySelectorAll('.pupil');
    const expressionLabel = document.querySelector('#memoji-expression');
    let hoverEmotion = null;

    const applyExpression = (expression) => {
        memojiCard.dataset.expression = expression;

        if (expressionLabel) {
            const labels = {
                relaxed: 'Espressione: rilassato',
                focused: 'Espressione: concentrato',
                surprised: 'Espressione: sorpreso',
                curious: 'Espressione: curioso',
            };

            expressionLabel.textContent = labels[expression] ?? labels.relaxed;
        }
    };

    const movePupils = (event) => {
        pupils.forEach((pupil) => {
            const eye = pupil.parentElement;
            const rect = eye.getBoundingClientRect();
            const dx = event.clientX - (rect.left + rect.width / 2);
            const dy = event.clientY - (rect.top + rect.height / 2);
            const max = 7;
            const offsetX = Math.max(-max, Math.min(max, dx / 10));
            const offsetY = Math.max(-max, Math.min(max, dy / 10));
            pupil.style.transform = `translate(calc(-50% + ${offsetX}px), calc(-50% + ${offsetY}px))`;
        });

        if (!hoverEmotion) {
            const expression = event.clientY < window.innerHeight * 0.28 ? 'surprised' : 'relaxed';
            applyExpression(expression);
        }
    };

    document.addEventListener('mousemove', movePupils);

    const emotionTriggers = document.querySelectorAll('[data-avatar-emotion]');
    emotionTriggers.forEach((trigger) => {
        trigger.addEventListener('mouseenter', () => {
            hoverEmotion = trigger.dataset.avatarEmotion;
            applyExpression(hoverEmotion);
        });

        trigger.addEventListener('mouseleave', () => {
            hoverEmotion = null;
            applyExpression('relaxed');
        });

        trigger.addEventListener('pointerdown', () => {
            applyExpression('focused');
        });
    });

    applyExpression('relaxed');
}