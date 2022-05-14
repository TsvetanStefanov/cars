//Upper Menu - Windows - Generate Menu
menuArray = [{Home : 'Index.php'},
{Videos : 'https://www.youtube.com/results?search_query=varna+cars'}
,{News : 'https://www.facebook.com/groups/1476419386007885/'},
{Varna:'https://www.viamichelin.com/web/Traffic/Traffic_info-Varna-_-Varna-Bulgaria'},
{SignIn : 'signIn.php'},{SignUP :'signUp.php'}];
function upperMenu(){
let menu = document.querySelector('#flexMenu');
menuArray.forEach(function(el,inx) {
    let menuNames = Object.keys(el);
    let menuLinks = Object.values(el);
    let anchors = document.createElement('a');
    menu.appendChild(anchors);
    anchors.classList.add('menues') ;  
    anchors.innerText=menuNames;
    anchors.href= menuLinks;
    if(inx > 3){
        anchors.classList.add('singin') ; 
        anchors.innerText=' Sign In';
    }
    if(inx > 4){
        anchors.classList.add('singup') ; 
        anchors.innerText=' Sign Up';
    }
});
}
upperMenu()

// Upper Menu - Phone
let menuDown = document.getElementById('menuDown');
let menuButton = document.getElementById('menuPhone');
let mainWrapper = document.querySelector('.mainWrapper');
chechMenuCondition =0
menuButton.addEventListener('click',function(){
  if(chechMenuCondition==0){
    menuDown.style.display = 'block';
    mainWrapper.style.display = 'none';
    chechMenuCondition = 1 ;
    return;
  }
  else if(chechMenuCondition==1){
    menuDown.style.display = 'none';
    mainWrapper.style.display = 'block';
    chechMenuCondition = 0
    return;
  }
});
let xMark = document.getElementById('Fatimes');
xMark.addEventListener('click',function(){
  menuDown.style.display = 'none';
  mainWrapper.style.display = 'block';
  chechMenuCondition = 0
  })
// Upper Menu - Phone Generate Menu
let smallMenu = document.getElementById('menuDownclick');
menuArray.forEach(function(el,inx) {
    let menuNames = Object.keys(el);
    let menuLinks = Object.values(el);
    let anchorsSmall = document.createElement('a');
    smallMenu.appendChild(anchorsSmall); 
    anchorsSmall.classList.add('menues2') ;  
    anchorsSmall.innerText=menuNames;
    anchorsSmall.href= menuLinks;
    if(inx > 3){
        anchorsSmall.innerText=' Sign Ip';
        anchorsSmall.classList.add('menues2') ;
    }
    if(inx > 4){
        anchorsSmall.classList.add('menues2') ; 
        anchorsSmall.innerText=' Sign Up';
    }
});

