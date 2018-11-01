var requestEvent = {
    url: '',
    data: {},
    type: 'POST',
    apply: function () {
        $.ajax({
            type: requestEvent.type,
            url: requestEvent.url,
            data: requestEvent.data,
            success: function (d) {
                if (d.code == 0) {
                    window.location.reload();
                }
            }
        });
    }
};