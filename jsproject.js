const inputField = document.querySelector('#textarea');
const startButton = document.querySelector('#btn');
const resultDisplay = document.querySelector('#score');
const sentenceDisplay = document.querySelector('#showSentence');

let typingStartTime, typingEndTime, totalTypingTime;

const testSentences = [
    'The alarm went off and Jake rose awake. Rising early had become a daily ritual, one that he could not fully explain. From the outside, it was a wonder that he was able to get up so early each morning for someone who had absolutely no plans to be productive during the entire day.',
    'She patiently waited for his number to be called. She had no desire to be there, but her mom had insisted that she go. She resisted at first, but over time she realized it was simply easier to appease her and go. Mom tended to be that way. She would keep.',
    'She sat down with her notebook in her hand, her mind wandering to faraway places. She paused and considered all that had happened. It hadnt gone as expected. When the day began she thought it was going to be a bad one, but as she sat recalling the day.',
    'Sometimes there isn a good answer. No matter how you try to rationalize the outcome, it ',
    'The wave crashed and hit the sandcastle head-on. The sandcastle began to melt under the waves force and as the wave receded, half the sandcastle was gone. The next wave hit, not quite as strong, but still managed to cover the remains of the sandcastle and take more of it away. The third wave, a big one, crashed over the sandcastle completely covering and engulfing it. When it receded, there was no trace the sandcastle ever existed and hours of hard work disappeared forever.',
];

const calculateTypingSpeed = (timeElapsed) => {
    let typedWords = inputField.value.trim();
    let wordCount = typedWords === '' ? 0 : typedWords.split(" ").length;

    if (wordCount !== 0) {
        let typingSpeed = (wordCount / timeElapsed) * 60;
        typingSpeed = Math.round(typingSpeed);
        resultDisplay.innerHTML = `Your typing speed is ${typingSpeed} words per minute. You typed ${wordCount} words in ${timeElapsed} seconds.`;
    } else {
        resultDisplay.innerHTML = `Your typing speed is 0 words per minute. It took you ${timeElapsed} seconds.`;
    }
}

const endTypingTest = () => {
    startButton.innerText = "Start";

    let date = new Date();
    typingEndTime = date.getTime();

    totalTypingTime = (typingEndTime - typingStartTime) / 1000;
    validation(typedWords,testSentences[randomIndex]);
    calculateTypingSpeed(totalTypingTime);






    
    sentenceDisplay.innerHTML = "";
    inputField.value = "";
}
function validation(typedWords,testSentences[randomIndex]){
    var size;
    if()
    for(var i=0;i,typedWords.length;i++)

const startTypingTest = () => {
    let randomIndex = Math.floor(Math.random() * testSentences.length);
    sentenceDisplay.innerHTML = testSentences[randomIndex];

    let date = new Date();
    typingStartTime = date.getTime();

    startButton.innerText = "Done";
}

startButton.addEventListener('click', () => {
    switch (startButton.innerText.toLowerCase()) {
        case "start":
            inputField.removeAttribute('disabled');
            startTypingTest();
            break;

        case "done":
            inputField.setAttribute('disabled', 'true');
            endTypingTest();
            break;
    }
});