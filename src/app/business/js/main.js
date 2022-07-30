$(document).ready(() => {
    $("#form").on("submit", () => {
        $.ajax({
            url: $("#form").attr("action"),
            type: $("#form").attr("method"),
            data: $("#form").serialize(),
            success: (response) => {
                const data = JSON.parse(response);
                console.log(data);
                $("#result").html(data.user.name + " " + data.user.lastname + " " + data.user.age);
            }
        }).fail(function() {
            console.log("Error");
        });
        return false;
    });
});