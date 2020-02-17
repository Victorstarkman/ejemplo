$(document).ready(function() {
    $('#selUser').select2({

        ajax: {
            url: "getData.php",
            type: "post",
            dataType: "json",
            delay: 250,
            data: function(params) {
                return {
                    searchTerm: params.term
                };

            },
            processResults: function(response) {

                return {
                    results: response
                };
            },
            cache: true
        }

    });
});