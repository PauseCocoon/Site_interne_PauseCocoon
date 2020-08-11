$(document).ready(function()
  {

    $('.btn').click(function(){
      var c= $(this).parent().children('.menu_vertical');
      if (c.css('left') == '-350px'){
        $(this).css('left','370px');
        (c.css('left','0px'));
      }
      else{
        $(this).css('left','20px');
        $(this).css('transition','0.4s');
        c.css('left','-350px');

      }
    });
    $('#titreMod_sidebar').click(function(){
      var changer = $(this).parent().children('.box');
      if (changer.css('visibility') == 'visible'){
        changer.css('visibility','hidden');
      }
      else{
        changer.css('visibility','visible');
      }
    });
});

(function()
 {
  var allQuestions = [{
    question: "The tree sends downroots from its branches to the soil is know as:",
    propositions: [" Oak", " Pine", " Banyan", " Palm"],
    answer: 2
  }, {
    question: "Electric bulb filament is made of",
    propositions: [" Copper", " Aluminum", " lead", " Tungsten"],
    answer: 3
  }, {
    question: "Non Metal that remains liquid at room temprature is",
    propositions: ["Phophorous", "Bromine", "Clorine","Helium"],
    answer: 1
  },{
    question: "Which of the following is used in Pencils ?",
    propositions: ["Graphite", "Silicon", "Charcoal", "Phosphorous"],
    answer: 0
  }, {
    question: "Chemical formula of water ?",
    propositions: ["NaA1O2", "H2O", "Al2O3", "CaSiO3"],
    answer: 1
  }
  ];

  var quesCounter = 0;
  var selectPropositions = [];
  var quizSpace = $('#quiz');

  nextQuestion();

  $('#next').click(function ()
    {
        chooseOption();
        if (isNaN(selectPropositions[quesCounter]))
        {
            alert('Veuillez sélectionner une proposition !');
        }
        else
        {
          quesCounter++;
          nextQuestion();
        }
    });

  $('#prev').click(function ()
    {
        chooseOption();
        quesCounter--;
        nextQuestion();
    });

  function createElement(index)
    {
        var element = $('<div>',{id: 'question'});
        var header = $('<h2>Question ' + (index + 1) +  '/' + allQuestions.length + '</h2>');
        element.append(header);

        var question = $('<p>').append(allQuestions[index].question);
        element.append(question);

        var radio = radioButtons(index);
        element.append(radio);

        return element;
    }

  function radioButtons(index)
    {
        var radioItems = $('<ul>');
        var item;
        var input = '';
        for (var i = 0; i < allQuestions[index].propositions.length; i++) {
          item = $('<li>');
          input = '<input type="radio" name="answer" value=' + i + ' />';
          input += allQuestions[index].propositions[i];
          item.append(input);
          radioItems.append(item);
        }
        return radioItems;
  }

  function chooseOption()
    {
        selectPropositions[quesCounter] = +$('input[name="answer"]:checked').val();
    }

  function nextQuestion()
    {
        quizSpace.fadeOut(function()
            {
              $('#question').remove();
              if(quesCounter < allQuestions.length)
                {
                    var nextQuestion = createElement(quesCounter);
                    quizSpace.append(nextQuestion).fadeIn();
                    if (!(isNaN(selectPropositions[quesCounter])))
                    {
                      $('input[value='+selectPropositions[quesCounter]+']').prop('checked', true);
                    }
                    if(quesCounter === 1)
                    {
                      $('#prev').show();
                    }
                    else if(quesCounter === 0)
                    {
                      $('#prev').hide();
                      $('#next').show();
                    }
                }
              else
                {
                    var scoreRslt = displayResult();
                    quizSpace.append(scoreRslt).fadeIn();
                    $('#next').hide();
                    $('#prev').hide();
                }
        });
    }

  function displayResult()
    {
        var score = $('<p>',{id: 'question'});
        var correct = 0;
        for (var i = 0; i < selectPropositions.length; i++)
        {
          if (selectPropositions[i] === allQuestions[i].answer)
          {
            correct++;
          }
        }
        bonnesrep = " bonnes réponses sur ";
        if (correct < 1)
        {
          bonnesrep = " bonne réponse sur ";
        }
        score.append('Quiz Terminé </br> Vous avez obtenu ' + correct + bonnesrep +allQuestions.length);
        return score;
  }
})();
