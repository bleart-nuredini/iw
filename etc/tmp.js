const goBtn = document.getElementById('go-btn');
const heyTxt = document.getElementById('hey-text');

goBtn.addEventListener('click', (e) => {
    e.preventDefault();
    heyTxt.style.opacity = 1;
});
