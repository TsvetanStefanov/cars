 let research = document.getElementById('Research');
let resImgArr = ['391901_Best_Used_Cars-Hero_Fullsize.webp',
`ee88b74994d2469c945f0128bcef0caa.jpeg`,
'landroverdefender.jpg',
'family-car.jpg',
'buying-a-family-car.jpg',
'1-seat-tarraco-2019-uk-fd-hero-front.jpg' ]



let resTextArr = ['Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat deleniti qua',
'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat deleniti quaLorem ipsum dolor sit amet consectetur adipisicing elit. Repellat deleniti qua',
'orem ipsum dolor sit amet consectetur adipisicing elit. Rep',
'orem ipsum dolor sit amet consectetur adipisicing elit. Rep',
'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat deleniti quaL',
'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat deleniti quaL',
]

 function dynamicResearch(){
for(i=0;i<resImgArr.length;i++){
let researchWrapper = document.createElement('div');
researchWrapper.classList.add('researchitems');
research.append(researchWrapper);
let researchImg = document.createElement('img');
researchImg.classList.add('researchImg');
researchImg.src = `images/researchitems/${resImgArr[i]}`;
researchWrapper.appendChild(researchImg);
let researchP1 = document.createElement('p');
researchP1.innerText= 'Rankins';
researchP1.classList.add('researchP1');
researchWrapper.appendChild(researchP1);
let researchh1 = document.createElement('p');
researchh1.innerText= 'Best Used Cars';
researchh1.classList.add('researchh1');
researchWrapper.appendChild(researchh1);
let researchP2 = document.createElement('div');
researchP2.classList.add('researchP2');
researchWrapper.appendChild(researchP2);
let pee2Inside = document.createElement('p');
pee2Inside.innerText = resTextArr[i];
researchP2.appendChild(pee2Inside);
}
}

dynamicResearch()
