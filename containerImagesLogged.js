//Put Car img into the array      Foloder :images/carsNews/
let carImages = ['2022_Acura_ILX_1.jpg',
'pexels-photo-3729464.jpeg','amggt63sphev_50.jpg'
,'front-left-side-47.webp',
'gpcjae98_jeep-meridian-suv-review_625x300_01_May_22.webp',
'426414c97264657bebb33d11a0205c04.jpg'
];
// Write review into the array     i of the carImages should match i of carReviews !
let carReviews = [ ' 2022 Hyundai Ioniq 5 Review: The EV We’ve Been Waiting For',
'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy ',
'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
];

function insertCarReviews(){
for(i=0;i<carImages.length;i++){
let imagesRow = document.getElementById('imagesRow');
let containerImage = document.createElement('div');
containerImage.classList.add('containerImage');
imagesRow.appendChild(containerImage);
let imgimagesRow = document.createElement('img');
imgimagesRow.src = `images/carsNews/${carImages[i]}`;
imgimagesRow.classList.add('carsSize')
containerImage.appendChild(imgimagesRow);
let peImg = document.createElement('p');
peImg.classList.add('experReview');
peImg.innerText = 'Expert Review';
containerImage.appendChild(peImg);
let peImgSection = document.createElement('p');
peImgSection.classList.add('descReview');
containerImage.appendChild(peImgSection);
peImgSection.innerText= carReviews[i];
}
}
insertCarReviews();


