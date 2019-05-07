check = document.querySelector("#check");

if (check.addEventListener("click",function () {
    hariawal = document.querySelector("#hariawal");
    hariakhir = document.querySelector("#hariakhir");
    p = document.querySelector("#totalharga");
    var selisih = ($(hariakhir).val() - $(hariawal).val()) + 1;
    $(p).html(selisih*180000);
}));