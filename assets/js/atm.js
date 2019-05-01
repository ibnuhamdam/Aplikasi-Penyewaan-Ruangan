
// quick = document.querySelectorAll("#quick-view");
// view = document.querySelectorAll("#view");

// for (let index = 0; index < quick.length; index++) {
//     quick[index].addEventListener("mouseover", function () {
//         quickFunction();
//     })
//     quick[index].addEventListener("mouseout", function () {
//         quickFunction();
//     })

//     function quickFunction() {
//         if (quick[index].classList.contains("mask") === true) {
//             setTimeout(view[index].classList.add("d-none"), 200);
//             quick[index].classList.remove("mask");
//         }
//         else {
//             setTimeout(view[index].classList.remove("d-none"), 200);
//             quick[index].classList.add("mask");
//         }
//     }
// }

bni = document.querySelector("#bni");
mandiri = document.querySelector("#mandiri");
textatm = document.querySelector("#transferatm");
norek = document.querySelector("#norek");

bni.addEventListener("click",function() {    
    $(textatm).html("<b> Transfer ATM BNI </b>");
    $(norek).val( "4425 0986" );
})
mandiri.addEventListener("click", function(){
    $(textatm).html("<b> Transfer ATM Mandiri </b>");
    $(norek).val("012 123442");
})
console.log(textatm);








