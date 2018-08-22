
var x = document.getElementById( 'colophon');

    x.style.backgroundColor = 'lightblue';

console.log( 'loaded');


  function showCookie(){
    var x = document.cookie = 'username=elliot richardson;expires=100;path=/';
    var y = document.cookie = 'favorite_sport=snowboarding;path=/';

    console.log(x,y);
  }
