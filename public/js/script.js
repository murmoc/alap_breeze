$(function () {
    const myAjax = new MyAjax();
    const tesztTomb = [];
    let apivegpont = "/api/";

    myAjax.adatBetolt(apivegpont + "teszt",tesztTomb,tesztMegjelen);

    function tesztMegjelen(megjelenit) {
        console.log(megjelenit);
        const szuloelem = $(".kerdoiv .valaszok");
        const sablonelem = $(".valaszok .valasz");
        szuloelem.empty();
        sablonelem.show();

        megjelenit.forEach(function (elem) {
            let node = sablonelem.clone().appendTo(szuloelem);
            const obj = new TesztKerdesek(node, elem);
        });
        sablonelem.hide();
    }

    $(window).on("valasz", (event) => {
        console.log(event.detail.id);
        v1.style.backgroundColor = 'green';
        v1.style.color = 'white';

    });
    
});