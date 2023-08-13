// Course animated 
function animateNumbers(targetId, startValue, endValue, duration) {
    const targetElement = document.getElementById(targetId);
    const startTime = performance.now();

    function updateNumber(currentTime) {
        const elapsedTime = currentTime - startTime;
        if (elapsedTime < duration) {
            const progress = elapsedTime / duration;
            const animatedValue = Math.floor(startValue + (endValue - startValue) * progress);
            targetElement.textContent = animatedValue.toLocaleString() + "+";
            requestAnimationFrame(updateNumber);
        } else {
            targetElement.textContent = endValue.toLocaleString() + "+";
        }
    }

    requestAnimationFrame(updateNumber);
}

animateNumbers("courseNumber", 1, 4000, 3000); // Adjust duration as needed
animateNumbers("universityNumber", 1, 75, 3000);
animateNumbers("successNumber", 1, 5000, 3000);