var requestEvent = {
    type: 'POST',
    apply: function (url,data) {
        $.ajax({
            type: requestEvent.type,
            url: url,
            data: data,
            success: function (d) {
                if (d.code == 0) {
                    window.location.reload();
                }else {
                    alert(d.msg);
                }
            }
        });
    }
};