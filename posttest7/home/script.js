const toggle = document.getElementById('toggleDark');
const body = document.querySelector('body');

toggle.addEventListener('click', function(){
    this.classList.toggle('bi-moon');
    if(this.classList.toggle('bi-brightness-high-fill')){
        body.style.background = '#cbc0d3';
        body.style.color = 'black';
        body.style.transition = '2s';
    }else{
        body.style.background = 'black';
        body.style.color = 'whitesmoke';
        body.style.transition = '2s';
    }
});

function a(){
    if(confirm("Apakah anda ingin membeli?")){
        alert("Pesanan sudah terkonfirmasi")
    }
    else{
        alert("Pesanan dibatalkan")
    }
}

function b(){
    document.getElementById('test1').style.background = 'gray';
    document.getElementById('test2').style.background = 'gray';
    document.getElementById('test3').style.background = 'gray';
    document.getElementById('test4').style.background = 'gray';
    document.getElementById('test5').style.background = 'gray';
}

const newspaperSpinning = [
    { transform: 'rotate(0) scale(1)' },
    { transform: 'rotate(360deg) scale(0)' }
  ];
  
  const newspaperTiming = {
    duration: 2000,
    iterations: 1,
  }
  
  const newspaper = document.querySelector(".newspaper");
  
  newspaper.addEventListener('click', () => {
    newspaper.animate(newspaperSpinning, newspaperTiming);
  });