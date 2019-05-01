// $(document).ready(function(){

//     $("#quick-view").mouseover(function(){
//         $("#view").removeClass("d-none");
//         $("#quick-view").addClass("mask");
//     });
//     $("#quick-view").mouseout(function(){
//         $("#view").addClass("d-none");
//         $("#quick-view").removeClass("mask");
//     });

//   });

check = document.querySelector("#check");

if (check.addEventListener("click",function () {
    hariawal = document.querySelector("#hariawal");
    hariakhir = document.querySelector("#hariakhir");
    p = document.querySelector("#totalharga");
    var selisih = $(hariakhir).val() - $(hariawal).val();
    $(p).html(selisih*180000);
    }))

quick = document.querySelectorAll("#quick-view");
view = document.querySelectorAll("#view");

for (let index = 0; index < quick.length; index++) {
    quick[index].addEventListener("mouseover", function () {
        quickFunction();
    })
    quick[index].addEventListener("mouseout", function () {
        quickFunction();
    })

    function quickFunction() {
        if (quick[index].classList.contains("mask") === true) {
            setTimeout(view[index].classList.add("d-none"), 200);
            quick[index].classList.remove("mask");
        }
        else {
            setTimeout(view[index].classList.remove("d-none"), 200);
            quick[index].classList.add("mask");
        }
    }
}







