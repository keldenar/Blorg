function check_ads() {
    if (window.canRunAds === undefined ) {
        $("div#ads").html("<div class='addBlock flex-center'>This site is solely supported by advertising revenue. If you like the content please consider turning off your ad blocker.</div>");
    }
}
