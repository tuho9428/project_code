<?php
include 'questions2.php';
?>

<!--sdf-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Self-Placement Exam Website-Dynamic Questionnaire</title></title>
    <link rel="stylesheet" href="styles.css" />
    <link href="headers.css" rel="stylesheet" />
    <link href="heroes.css" rel="stylesheet" />
    <link href="features.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.3/examples/footers/"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"
    />
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, 0.1);
        border: solid rgba(0, 0, 0, 0.15);
        border-width: 1px 0;
        box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
          inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -0.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>
    <style>
      .red-btn {
        background-color: #ab0032; /* Your desired background color */
        color: #ffffff; /* Your desired text color */
        /* Add any other styles you want */
      }

      .bg-red {
        background-color: #ab0032; /* Your desired background color */
      }
      .btn-bd-red {
        --bd-violet-bg: #ab0032;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #ab0033d1;
        --bs-btn-hover-border-color: #b0033d1;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #ab0033c0;
        --bs-btn-active-border-color: #ab0033c0;
      }
    </style>
    <script src="./assets/js/color-modes.js" defer></script>
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
      <symbol id="people-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
        <path
          fill-rule="evenodd"
          d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"
        />
      </symbol>
      <symbol id="collection" viewBox="0 0 16 16">
        <path
          d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"
        />
      </symbol>
      <symbol id="toggles2" viewBox="0 0 16 16">
        <path
          d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z"
        />
        <path
          d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z"
        />
        <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z" />
      </symbol>
    </svg>

    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path
          d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"
        />
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path
          d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"
        />
        <path
          d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"
        />
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path
          d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
        />
      </symbol>
    </svg>

    <main>
      <!--Nav-->
      <div class="container-fluid">
        <header class="p-3 bg-red text-white">
          <div class="container">
            <div
              class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"
            >
              <a
                href="./index.html"
                class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none"
              >
                <img
                  height="40px"
                  src="img/cwu-wildcat-spirit-mark-single-color-reversed.png"
                />
              </a>

              <ul
                class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"
              >
                <li>
                  <a href="#" class="nav-link px-2 text-white">Home</a>
                </li>
                <li>
                  <a href="#" class="nav-link px-2 text-white">About</a>
                </li>
                <li>
                  <a href="exam.php" class="nav-link px-2 text-white">Exam</a>
                </li>
                <li>
                  <a href="guideLines.html" class="nav-link px-2 text-white">Guidelines</a>
                </li>
                <li><a href="#" class="nav-link px-2 text-white">FAQ</a></li>
                <li>
                  <a href="#" class="nav-link px-2 text-white">Contact</a>
                </li>
                <li>
                  <a href="#" class="nav-link px-2 text-white"
                    >Admin Dashboard</a
                  >
                </li>
              </ul>

              <div class="text-end">
                <button type="button" class="btn btn-light me-2">Login</button>
                <button type="button" class="btn btn-dark me-2">Sign-up</button>
                <button type="button" class="btn btn-bd-primary">Admin</button>
              </div>
            </div>
          </div>
        </header>
      </div>
<!--sdf-->

<div class="container-fluid">
<h1>Questionnaire</h1>
<h1 id="questionTitle">Questionnaire</h1>
<h2>Topic <span id="questionTopic">Topic</span></h2>
<h3 id="totalScore">Total Score: <span id="scoreValue">0</span></h3>
<br />
    
    <div id="questionContainer">
        <!-- Questions and answer choices will be dynamically updated here -->
    </div>
    

    <form id="answerForm">
        <!-- Add an element to display answer choices -->
        <div id="answerChoices"></div>

        <br />
        <button type="submit">Submit</button>
    </form>
    </div>

          <!--Dark mode-->
          <div
        class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle"
      >
        <button
          class="btn btn-secondary py-2 dropdown-toggle d-flex align-items-center"
          id="bd-theme"
          type="button"
          aria-expanded="false"
          data-bs-toggle="dropdown"
          aria-label="Toggle theme (auto)"
        >
          <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
            <use href="#circle-half"></use>
          </svg>
          <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul
          class="dropdown-menu dropdown-menu-end shadow"
          aria-labelledby="bd-theme-text"
        >
          <li>
            <button
              type="button"
              class="dropdown-item d-flex align-items-center"
              data-bs-theme-value="light"
              aria-pressed="false"
            >
              <svg class="bi me-2 opacity-50" width="1em" height="1em">
                <use href="#sun-fill"></use>
              </svg>
              Light
              <svg class="bi ms-auto d-none" width="1em" height="1em">
                <use href="#check2"></use>
              </svg>
            </button>
          </li>
          <li>
            <button
              type="button"
              class="dropdown-item d-flex align-items-center"
              data-bs-theme-value="dark"
              aria-pressed="false"
            >
              <svg class="bi me-2 opacity-50" width="1em" height="1em">
                <use href="#moon-stars-fill"></use>
              </svg>
              Dark
              <svg class="bi ms-auto d-none" width="1em" height="1em">
                <use href="#check2"></use>
              </svg>
            </button>
          </li>
          <li>
            <button
              type="button"
              class="dropdown-item d-flex align-items-center active"
              data-bs-theme-value="auto"
              aria-pressed="true"
            >
              <svg class="bi me-2 opacity-50" width="1em" height="1em">
                <use href="#circle-half"></use>
              </svg>
              Auto
              <svg class="bi ms-auto d-none" width="1em" height="1em">
                <use href="#check2"></use>
              </svg>
            </button>
          </li>
        </ul>
      </div>

      <!--footer-->
      <div class="container-fluid py-5">
        <footer
          class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top"
        >
          <p class="col-md-4 mb-0 text-body-secondary">
            &copy; 2024 Central Washington University
          </p>

          <a
            href="/"
            class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"
          >
            <img
              src="img/cwu-logo-full-color-rgb-transparent.png"
              height="40px"
            />
          </a>

          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item">
              <a href="#" class="nav-link px-2 text-body-secondary">Home</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link px-2 text-body-secondary">Exam</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link px-2 text-body-secondary"
                >Guidelines</a
              >
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link px-2 text-body-secondary">FAQs</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link px-2 text-body-secondary">About</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link px-2 text-body-secondary">Contact</a>
            </li>
          </ul>
        </footer>
      </div>
    </main>

    <script src="script.js"></script>


    <script>
    const questions = <?php echo json_encode($questions); ?>; // PHP array of questions

    let difficultyLevels = ['easy', 'medium', 'hard', 'very hard'];
    let currentDifficultyIndex = 2;
    let userResponses = [];
    let topicScores = {};
    let totalScore = 0;
    let submitCount = 0;
    let randomQuestion; // Initialize randomQuestion variable

    function calculateScore(response, difficulty) {
        let points = 0;
        switch (difficulty) {
            case 'easy':
                return points + 0;
            case 'medium':
                return points + 1;
            case 'hard':
                return points + 2;
            case 'very hard':
                return points + 3;
            default:
                return points;
        }
    }

    function displayQuestionByDifficulty(difficultyLevel) {
        const filteredQuestions = questions.filter(question => question.difficulty === difficultyLevel);
        randomQuestion = filteredQuestions[Math.floor(Math.random() * filteredQuestions.length)];
        
        document.getElementById('questionTitle').textContent = randomQuestion.question;
        document.getElementById('questionTopic').textContent = randomQuestion.topic;

        const answersContainer = document.getElementById('answerChoices');
        answersContainer.innerHTML = ''; // Clear previous answer choices

        for (const [index, value] of randomQuestion.answers.entries()) {
            const radioBtn = document.createElement('input');
            radioBtn.type = 'radio';
            radioBtn.name = 'answer';
            radioBtn.value = value;

            const label = document.createElement('label');
            label.textContent = value;

            answersContainer.appendChild(radioBtn);
            answersContainer.appendChild(label);
        }
    }

    displayQuestionByDifficulty(difficultyLevels[currentDifficultyIndex]);

    let consecutiveCorrectAnswers = 0;
    let consecutiveIncorrectAnswers = 0;

    document.getElementById('answerForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
    
        const selectedAnswer = document.querySelector('input[name="answer"]:checked').value;
        const correctAnswer = randomQuestion.correctedAnswer;

        let isCorrect = selectedAnswer === correctAnswer;
        
        if (isCorrect) {
            alert('Yea, The correct answer is: ' + correctAnswer);

            let questionScore = calculateScore(selectedAnswer, randomQuestion.difficulty);
            
            totalScore += questionScore;
            document.getElementById('scoreValue').textContent = totalScore;

            let currentTopic = randomQuestion.topic;
            topicScores[currentTopic] = (topicScores[currentTopic] || 0) + questionScore;

            consecutiveCorrectAnswers++;
            consecutiveIncorrectAnswers = 0;

            if (consecutiveCorrectAnswers >= 2) {
                currentDifficultyIndex = Math.min(currentDifficultyIndex + 1, difficultyLevels.length - 1);
                userResponses = [];
                consecutiveCorrectAnswers = 0;
            }

            const answersContainer = document.getElementById('answerChoices');
            answersContainer.innerHTML = '';

            displayQuestionByDifficulty(difficultyLevels[currentDifficultyIndex]);

        } else {
            alert('Incorrect answer. The correct answer is: ' + correctAnswer);

            consecutiveIncorrectAnswers++;
            consecutiveCorrectAnswers = 0;

            if (consecutiveIncorrectAnswers >= 2) {
                currentDifficultyIndex = Math.max(currentDifficultyIndex - 1, 0);
                userResponses = [];
                consecutiveIncorrectAnswers = 0;
            }

            const answersContainer = document.getElementById('answerChoices');
            answersContainer.innerHTML = '';

            displayQuestionByDifficulty(difficultyLevels[currentDifficultyIndex]);
        }
        
        
    });
</script>
<script>
    /*!
 * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
 * Copyright 2011-2024 The Bootstrap Authors
 * Licensed under the Creative Commons Attribution 3.0 Unported License.
 */

(() => {
  'use strict'

  const getStoredTheme = () => localStorage.getItem('theme')
  const setStoredTheme = theme => localStorage.setItem('theme', theme)

  const getPreferredTheme = () => {
    const storedTheme = getStoredTheme()
    if (storedTheme) {
      return storedTheme
    }

    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
  }

  const setTheme = theme => {
    if (theme === 'auto') {
      document.documentElement.setAttribute('data-bs-theme', (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'))
    } else {
      document.documentElement.setAttribute('data-bs-theme', theme)
    }
  }

  setTheme(getPreferredTheme())

  const showActiveTheme = (theme, focus = false) => {
    const themeSwitcher = document.querySelector('#bd-theme')

    if (!themeSwitcher) {
      return
    }

    const themeSwitcherText = document.querySelector('#bd-theme-text')
    const activeThemeIcon = document.querySelector('.theme-icon-active use')
    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
    const svgOfActiveBtn = btnToActive.querySelector('svg use').getAttribute('href')

    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
      element.classList.remove('active')
      element.setAttribute('aria-pressed', 'false')
    })

    btnToActive.classList.add('active')
    btnToActive.setAttribute('aria-pressed', 'true')
    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
    const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
    themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)

    if (focus) {
      themeSwitcher.focus()
    }
  }

  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
    const storedTheme = getStoredTheme()
    if (storedTheme !== 'light' && storedTheme !== 'dark') {
      setTheme(getPreferredTheme())
    }
  })

  window.addEventListener('DOMContentLoaded', () => {
    showActiveTheme(getPreferredTheme())

    document.querySelectorAll('[data-bs-theme-value]')
      .forEach(toggle => {
        toggle.addEventListener('click', () => {
          const theme = toggle.getAttribute('data-bs-theme-value')
          setStoredTheme(theme)
          setTheme(theme)
          showActiveTheme(theme, true)
        })
      })
  })
})()

    </script>


</body>
</html>

