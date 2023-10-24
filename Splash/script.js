let	intro = document.querySelector('.intro');
let game = document.querySelector('.pong-header');
let gameSpan = document.querySelectorAll('.game');

window.addEventListener('DOMContentLoaded', ()=>{

	setTimeout(()=>{

		gameSpan.forEach((span, idx)=>{
			setTimeout(()=>{
				span.classList.add('active');
			}, (idx + 1) * 400)
		});

		setTimeout(()=>{
			gameSpan.forEach((span, idx)=>{
				setTimeout(()=>{
					span.classList.remove('active');
					span.classList.add('false');
				}, (idx + 1) *50)
			})
		}, 2000);

		setTimeout(()=>{
			intro.style.top = '-100vh';
		}, 2300);
		
	})
})