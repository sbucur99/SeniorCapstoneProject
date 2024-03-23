/* 
This file pulls the questions in the database and generates a questionaire from them.
It records each answer the user inputs and saves the results.
The results are then sent to the database via post_results.php
*/

const question = document.querySelector("#question");
const choices = Array.from(document.querySelectorAll(".choice-text"));
const progressText = document.querySelectorAll("#progressText")[0];
const progressBarFull = document.querySelectorAll("#progressBarFull")[0];

let curQuestion = {};
let acceptingAnswers = true;
let questionCounter = 0;
let MAX_QUESTIONS;

// List of questions that are used on the questionaire
let availableQuesitons = [];
// List of choices that are used on the questionaire
let availableChoices = [];
let curChoices = []
// Question data parsed from the database
let questions = [];
// Question choices available
let question_responses = [];

// Features that are being tested for
let feature_scores = new Map();

const question_data = {};

function fetchQuestions() {
  return new Promise((resolve) => {
    fetch("../php/get_questions.php")
      .then((response) => response.json())
      .then((question_data) => {
        for (const q_data of question_data) {
          const q = {
            text: q_data.question_text,
            id: q_data.question_id,
          };
          questions.push(q);
        }

        //Start questionaire after json data has been parsed
        fetchResponses();
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
}

function fetchResponses() {
  return new Promise((resolve) => {
    fetch("../php/get_question_responses.php")
      .then((response) => response.json())
      .then((question_data) => {
        for (const q_data of question_data) {
          const q = {
            id: q_data.question_id,
            text: q_data.response_text,
            feature: q_data.response_feature,
          };
          question_responses.push(q);
        }
        //Start questionaire after json data has been parsed
        startQuestions();
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
}

function getFeatures() {
  return new Promise((resolve) => {
    fetch("../php/get_features.php")
      .then((response) => response.json())
      .then((feature_data) => {
        for (const feature of feature_data) {
          feature_scores.set(feature.feature_name, 0);
        }
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  })
}

function startQuestions() {
  MAX_QUESTIONS = questions.length;
  questionCounter = 0;
  availableQuesitons = [...questions];
  availableChoices = [...question_responses];
  getNewQuestion();
}

function getNewQuestion() {
  //If there are no questions are left
  if (availableQuesitons.length === 0 || questionCounter > MAX_QUESTIONS) {
    // Send results to database
    postResults();
    // Go to results page
    return window.location.assign("http://localhost/CSC-490_SeniorCapstone/php/results.php");
  }

  //Update question progress bar
  questionCounter++;
  progressText.innerText = `Question ${questionCounter} of ${MAX_QUESTIONS}`;
  progressBarFull.style.width = `${(questionCounter / MAX_QUESTIONS) * 100}%`;

  //Set next question to a random question from one of the available questions
  const questionIndex = Math.floor(Math.random() * availableQuesitons.length);
  curQuestion = availableQuesitons[questionIndex];

  curChoices = [];
  // Get the choices for this question
  availableChoices.forEach(element => {
    if (element.id == curQuestion.id) {
      curChoices.push(element);
    }
  });

  question.innerText = curQuestion.text;

  //Set question reponse text
  choices.forEach((choice) => {
    const number = choice.dataset["number"];
    choice.innerText = curChoices[number - 1].text;
  });

  //Update available questions array
  availableQuesitons.splice(questionIndex, 1);
  acceptingAnswers = true;
}

//Called when user selects a response choice
choices.forEach((choice) => {
  choice.addEventListener("click", (event) => {
    if (!acceptingAnswers) return;
    acceptingAnswers = false;
    const selectedChoice = event.target;
    const selectedAnswer = selectedChoice.dataset["number"];

    //update feature scores
    updateFeatureScore(curChoices[selectedAnswer - 1].feature);
    //console.log("selected choice feature:", curChoices[selectedAnswer - 1].feature);

    //Get new question
    let classToApply = selectedAnswer;
    selectedChoice.parentElement.classList.add(classToApply);
    setTimeout(() => {
      selectedChoice.parentElement.classList.remove(classToApply);
      getNewQuestion();
    }, 500);
  });
});

// Updates a features score
function updateFeatureScore(feature) {
  var key = feature;
  var res = feature_scores.get(key);
  res = 1 + res;
  feature_scores.set(key, res);
  console.log("scores", feature_scores);
}

//Encode results to JSON and send to post_results.php
async function postResults() {
  var obj = Object.fromEntries(feature_scores);
  var jsonString = JSON.stringify(obj);

  fetch("http://localhost/CSC-490_SeniorCapstone/php/post_results.php", {
    method: "POST",
    mode: "same-origin",
    credentials: "same-origin",
    headers: {
      "Content-Type": "application/json;charset=utf-8",
    },
    body: jsonString,
  })
    .then(function (response) {
      return response.text();
    })
    .then(function (jsonString) {
      console.log(jsonString);
    })
    .catch(function (err) {
      console.log("Failed to fetch:", err);
    });
}


fetchQuestions();
getFeatures();
