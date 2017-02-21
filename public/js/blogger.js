/**
 * Created by bretc on 2/21/17.
 */

$("input#title").on("keyup", function(event) {
    $.ajax({
        url: $("input#url").val(),
        data: {
            value: $("input#title").val(),
            _token: $("input[name=_token]").val()
        },
        method: "post",
        success: function(result) {
            $("div#title-target").html(result)
        }
    });
});

$("textarea#blog").on("keyup", function(event) {
    $.ajax({
        url: $("input#url").val(),
        data: {
            value: $("textarea#blog").val(),
            _token: $("input[name=_token]").val()
        },
        method: "post",
        success: function(result) {
            $("div#blog-target").html(result)
        }
    });
});