const questions = [
    {
        question: 'What should be the first tag in any HTML document?',
        answer: [
            {
                text: 'A. &lt;html&gt;',
                correct: false
            },
            {
                text: 'B. &lt;head&gt;',
                correct: true
            },
            {
                text: 'C. &lt;!DOCTYPE&gt;',
                correct: false
            },
            {
                text: 'D. &lt;title&gt;',
                correct: false
            },

        ]
    }
]

const questionContainer = document.getElementById('question-list');
const questionName = document.getElementById('questions');
const questionList = document.getElementById('questionList')
