class MyAjax {
    constructor() {}
    adatBetolt(apivegpont, tomb, myCallback) {
        tomb = [];
        $.ajax({
            url: apivegpont,
            type: "GET",
            success: function (result) {
                result.forEach((element) => {
                    tomb.push(element);
                });

                myCallback(tomb);
            },
        });
    }

}