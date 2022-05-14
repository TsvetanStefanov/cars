
let wrapper = document.querySelector('.animation');
for(i=0;i<50;i++){
  let circles = document.createElement('div');
  let circlesInner = document.createElement('div');
  circles.classList.add('circles');
  let red = Math.floor(Math.random()*255);
  let green =  Math.floor(Math.random()*10);
  let blue =  Math.floor(Math.random()*10);
  circles.style.backgroundColor = `rgb(${red},${green},${blue})`;
  circlesInner.classList.add('circlesInner')
  setTimeout(() => {
    wrapper.appendChild(circles);;
    circles.appendChild(circlesInner);
  }, i*150)
};