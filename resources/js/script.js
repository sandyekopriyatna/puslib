<script>
            $("#penelitian").change(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    const langId = $(this).val();

    $.ajax({
        type: "POST",
        url: "harga",
        data: {
            languageId: langId,
        },
        success: function (result) {
            $("#harga").empty();
            $("#harga").append(
                '<option selected disabled value="">Select</option>'
            );

            if (result && result?.status === "success") {
                result?.data?.map((harga) => {
                    const harga = `<option value='${harga?.id}'> ${harga?.nama} </option>`;
                    $("#harga").append(harga);
                });
            }
        },
        error: function (result) {
            console.log("error", result);
        },
    });
});
        </script>