(function ($) {

    'use strict';

    // ------------------------------------------------------- //
    // Widget 16 (Correct Answers)
    // ------------------------------------------------------ //

    var $result = $('#quiz-result'),
        $quizPercent = parseInt($result.attr('data-percent')),
        $quizPassingScore = parseInt($result.attr('data-passing-score')),
        $gradient = ['#d9f98d', '#74e76c'],
        $quizProgress = $quizPercent/100;

    if ($quizPercent < $quizPassingScore) {
        $gradient = ['#f9a58d', '#e76c90'];
    }

    $('.pages-views').circleProgress({
        value: $quizProgress,
        size: 120,
        startAngle: -Math.PI / 2,
        thickness: 10,
        lineCap: 'round',
        emptyFill: '#f0eff4',
        fill: {
            gradient: [$gradient[0], $gradient[1]]
        }
    }).on('circle-animation-progress', function (event, progress) {
        $(this).find('.percent').html(Math.round($quizPercent * progress) + '<i>%</i>');
    });

    // ------------------------------------------------------- //
    // Widget 17 (Spent Time)
    // ------------------------------------------------------ //

    var $quizTime = $('#quiz-time'),
        $totalTime = parseInt($quizTime.attr('data-total-time')),
        $spentTime = parseInt($quizTime.attr('data-spent-time')),
        $timePercent = Math.ceil(($spentTime*100)/$totalTime),
        $timeProgress;

    if ($timePercent > 100) { $timePercent = 100; }
    $timeProgress = $timePercent/100;

    $('.visitors').circleProgress({
        value: $timeProgress,
        size: 120,
        startAngle: -Math.PI / 2,
        thickness: 10,
        lineCap: 'round',
        emptyFill: '#f0eff4',
        fill: {
            gradient: ['#0087a4', '#08a6c3']
        }
    }).on('circle-animation-progress', function (event, progress) {
        $(this).find('.percent').html(Math.round($timePercent * progress) + '<i>%</i>');
    });

})(jQuery);
