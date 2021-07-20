var letters = ["H","o","u","s","i","n","g","M","a","n","a","g","e","m","e","n","t",".","c","o","m"];
var $randomNumber2 = $('.nbr2');
var $timer = 500;
var $it;
var $data = 0;
var index;
var change;

$randomNumber2.each(function () {
  change = Math.round(Math.random() * 100);
  $(this).attr('data-change', change);
});

function random() {
  return Math.round(Math.random() * 9);
};

function select() {
  return Math.round(Math.random() * $randomNumber2.length + 1);
};

function value() {
  $('.nbr2:nth-child(' + select() + ')').html('' + random() + '');
  $('.nbr2:nth-child(' + select() + ')').attr('data-number', $data);
  $data++;

  $randomNumber2.each(function () {
    if (parseInt($(this).attr('data-number')) > parseInt($(this).attr('data-change'))) {
      index = $('.ltr2').index(this);
      $(this).html(letters[index]);
      $(this).removeClass('nbr2');
    }
  });
};

$it = setInterval(value, $timer);