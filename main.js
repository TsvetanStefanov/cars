$('.owl-carousel').owlCarousel({
    loop:true,
    items:1,
    autoplay:true,
    autoplayTimeout:5000,
})


////////////////Search Sell buttons
let searchButton = document.getElementById('search');
let sellhButton = document.getElementById('sell');
let formChoice = document.querySelector('.formChoice');
let sellWrapper = document.querySelector('.sellWrapper');
sellhButton.addEventListener('click',function(){
  formChoice.style.display = 'none';
  sellWrapper.style.display = 'block';
  sellhButton.style.borderBottom = ' 5px solid rgb(186, 59, 59)';
  searchButton.style.borderBottom = ' none';
})
searchButton.addEventListener('click',function(){
  formChoice.style.display = 'block';
  sellWrapper.style.display = 'none';
  searchButton.style.borderBottom = ' 5px solid rgb(186, 59, 59)';
  sellhButton.style.borderBottom = ' none';
})

//////////Send Msg Validation

formSendMsg = document.getElementById('formSendMsg');
formSendMsg.addEventListener('submit',function(e){
  e.preventDefault();
  let msgTextarea = document.getElementById('sendMsgText');
  let msgTextareaValue = msgTextarea.value.trim();
  let msgStatus = document.getElementById('msgStatus');
  if(msgTextareaValue.length  <20){
    msgStatus.innerText = 'Msg too short';
    return;
  }else if(msgTextareaValue.length >100){
    msgStatus.innerText = 'Msg too Long';
    return;
  }else{
    msgStatus.innerText = 'You need to be logged In';
    msgTextarea.value = " ";    
  }
 
})
//////////////////////////////////////////////////////////////
// Jquery Picture
let imglambo = document.getElementById('imgBigImage');
$(window).scroll(function () {
  if ($(document).scrollTop() > 1350) {
      $(imglambo).addClass('tiny');
  } 
  else {
      $(imglambo).removeClass('tiny');
  }
});

///////////////////////////////////////Donw Menus on fifth part


function menues(){
let menuGet = document.querySelectorAll('.flexFifthItem');
let menuDown = document.querySelectorAll('.flexFifthItemDown');
let arrowDown = document.querySelectorAll('.fa-arrow-down');

menuGet.forEach(function(el,index){ 
el.addEventListener('click',function(){
menuDown[index].classList.toggle('flexFifthItemDown');
el.classList.toggle('backgrounds');
arrowDown[index].classList.toggle('clock')
});
})
}
menues()


