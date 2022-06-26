const container=document.querySelector('.container');
const navbar=document.querySelector('.navbar');
const containeroffsetTop=container.offsetTop;

window.addEventListener('scroll', ()=>{
     
    if(window.scrollY >= containeroffsetTop){
        container.style.position='fixed';
        container.style.top=0;
        container.style.width='100%';
        
    }else{
        container.style.position='static';
    }
});



// partie witness

const text=document.querySelector(".msg_witness").children,
textlen=text.length;
let index=0;
const textInTimer=6000,
      textOutTimer=1000;

  function animateText(){
   for(let i=0;i<textlen;i++){
      text[i].classList.remove("text_in","text_out");
   }
   text[index].classList.add("text_in");

   setTimeout(function(){
      text[index].classList.add("text_out");
   },textOutTimer);

    setTimeout(function(){
      if(index == textlen-1){
         index=0;
      }else{
         index++;
      }
      animateText();
    },textInTimer);
  }
  window.onload=animateText;

// Apparition au defilement

const ratio =.1;
const options = {
   root: null,
   rootMagin: '0px',
   threshold: ratio
}

const handleIntersect = function(entries,observer){
   entries.forEach(function (entry){
      if(entry.intersectionRatio > ratio){
         entry.target.classList.add('reveal_visible');
         observer.unobserve(entry.target);
      }
   })
}

const observer = new IntersectionObserver(handleIntersect,options);
document.querySelectorAll('.reveal').forEach(function (r){
   observer.observe(r);
})