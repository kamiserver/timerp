let timer;
let timeRemaining;
let running = false;

document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('start-btn').addEventListener('click', startTimer);
    document.getElementById('stop-btn').addEventListener('click', stopTimer);
    document.getElementById('settings-btn').addEventListener('click', () => {
        window.location.href = 'settings.php';
    });

    fetch('timer_logic.php?action=getTime')
        .then(response => response.json())
        .then(data => {
            timeRemaining = data.timeRemaining;
            updateDisplay();
        });
});

function startTimer() {
    if (running) return;
    running = true;
    timer = setInterval(() => {
        if (timeRemaining > 0) {
            timeRemaining--;
            updateDisplay();
            fetch(`timer_logic.php?action=setTime&time=${timeRemaining}`);
        } else {
            clearInterval(timer);
            running = false;
        }
    }, 1000);
}

function stopTimer() {
    running = false;
    clearInterval(timer);
}

function updateDisplay() {
    const hours = Math.floor(timeRemaining / 3600);
    const minutes = Math.floor((timeRemaining % 3600) / 60);
    const seconds = timeRemaining % 60;
    document.getElementById('timer-display').textContent =
        `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
}
