// const name = 

// document.querySelector('.btn.btn-primary').addEventListener('click', ()=>{
//     // console.log('fired');
//     const pc = document.querySelector('inputGroupSelect01').value;
//     localStorage.setItem('pcNum', JSON.stringify(pc));
// });

document.querySelectorAll(".modal-dialog").forEach(item =>{
    if (item.querySelector('.pc-num-popup').textContent !== localStorage.getItem('pcNum') || localStorage.getItem('pcNum') === false){
        item.querySelector('.btn-danger').style.display = "none";
    } else{
        item.querySelector(".btn-danger").addEventListener('click', ()=>{
            localStorage.removeItem('pcNum');
        });
    }
});