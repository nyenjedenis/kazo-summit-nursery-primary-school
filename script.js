


// Add event listener to nav links  
document.querySelectorAll('nav a').forEach(link => {  
    link.addEventListener('click', event => {  
       event.preventDefault();  
       const sectionId = link.getAttribute('href');  
       const section = document.querySelector(sectionId);  
       section.scrollIntoView({ behavior: 'smooth' });  
    });  
 });  
   
 // Add event listener to login forms  
 document.querySelectorAll('form').forEach(form => {  
    form.addEventListener('submit', event => {  
       event.preventDefault();  
       const username = form.querySelector('#username').value;  
       const password = form.querySelector('#password').value;  
       // Add login logic here  
    });  
 });  
   
 // Add event listener to cover photo slideshow  
 document.querySelector('.cover-photo-slideshow').addEventListener('click', event => {  
    const slideshow = event.target;  
    const images = slideshow.querySelectorAll('img');  
    let currentImage = 0;  
    setInterval(() => {  
       images[currentImage].style.opacity = 0;  
       currentImage = (currentImage + 1) % images.length;  
       images[currentImage].style.opacity = 1;  
    }, 3000);  
 });
 