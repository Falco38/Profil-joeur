function majProfil(pseudo) {

$.get("http://127.0.0.1/site/profil_joueur/api/getProfil.php?name="+pseudo).done( function(data){

    profil = jQuery.parseJSON(data);
    //$( "#result" ).text(profil.name );
    console.log(profil);
    console.log(profil.name);
    console.log(profil.summonerLevel);

    console.log("le niveau de "+profil.name+" est de "+profil.summonerLevel); 
    $("#level").text("niveau "+profil.summonerLevel);
    $("#pseudo").text(profil.name);
    $("#icon").attr('src','http://ddragon.leagueoflegends.com/cdn/12.4.1/img/profileicon/'+profil.profileicon+'.png');
    });
}

$(document).ready(function() {

    majProfil("toto");


    $("#input_button").click(function(){
       // $("#input_button").val();

        var TextUtilisateur = $("#input_text").val();
        majProfil (TextUtilisateur)
    });


});