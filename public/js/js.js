/**
 * Basic Ajax controller
 *
 * @param url
 * @param data
 */
var ajax = function(url, data) {

    console.log(data);

    $.ajax({
        'url'     : 'http://laravel.dev/public/' + url,
        'type'    : 'GET',
        'data'    : data,
        'success' : function (response) {
            console.log(response);
        },
        'error'   : function (request, error) {
            alert("Request: " + JSON.stringify(request));
        }
    });
}