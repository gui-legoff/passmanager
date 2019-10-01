// script pour copier le mot de passe
    function copyToClipboard(element) {
        var $temp = $("<input>");
    
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $.notify("Mot de passe copié", {
            type: "info",
            icon: "info"
        });
        $temp.remove();
    }
// END script pour copier le mot de passe