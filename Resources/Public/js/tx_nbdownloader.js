jQuery(document).ready(function () {
    $(".linkNbDownloader").bind('click', function (event) {
        event.preventDefault();
        var author = $(this).attr('author');
        if (author === '' || author === undefined) {
            author = $(this).attr('authorDefaut');
        }
        $("#nbLicenceDownloadLink").attr('href', $(this).attr('href'));
        $("#nbAuthorName").html(author);
        $("#tx_nb_downloader_overlay").show();
        $("#tx_nb_downloaderLicence").show();
    });

    $("#nbLicenceDownloadLink").bind('click', function (event) {
        event.preventDefault();
        window.location.href = $(this).attr('href');
        window.setTimeout("nbDownloadClose()", 2000);
    });




});

function nbDownloadClose() {
    $("#tx_nb_downloader_overlay").hide();
    $("#tx_nb_downloaderLicence").hide();
}
