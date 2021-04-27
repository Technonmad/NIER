function getNewMessages(){
    $.ajax({
        url: "MessagesPull.xml",
        cache: false,
        datatype: "xml",
        success: function(xml){

        }
    });
}