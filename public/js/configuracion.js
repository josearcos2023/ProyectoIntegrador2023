    const questionCountRange = document.getElementById('questionCountRange');
    const questionCountInput = document.getElementById('questionCountInput');
    const timeLimitRange = document.getElementById('timeLimitRange');
    const timeLimitInput = document.getElementById('timeLimitInput');

    questionCountRange.addEventListener('input', () => {
        questionCountInput.value = questionCountRange.value;
    });

    questionCountInput.addEventListener('input', () => {
        questionCountRange.value = questionCountInput.value;
    });

    timeLimitRange.addEventListener('input', () => {
        timeLimitInput.value = timeLimitRange.value;
    });

    timeLimitInput.addEventListener('input', () => {
        timeLimitRange.value = timeLimitInput.value;
    });