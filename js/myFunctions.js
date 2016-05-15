/**
 * Created by Nenad on 3/14/2016.
 */
function dajPodatak(){

    $.ajax({
        url: "getLicencesList",
        context: document.body
    }).done(function(response) {
        $("#name").html(response.name);
        $("#state").html(response.state);
        $("#licencaBr").html(response.licencaBr);
    });
}
function printPage(){
    $("#print").css("visibility", "hidden");
    window.print();
}