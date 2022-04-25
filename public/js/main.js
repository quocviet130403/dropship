const app = {
    chageQtyCartAjax: () => {
        $("input.input-number").change(function () {
            let qty = $(this).val();
            let rowId = $(this).data("id");
            let price = $(this).data("price");
            let url = $(this).data("url");
            let subtitle = $(this).parent().parent().next().children();
            $.ajax({
                url: url,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                type: "POST",
                dataType: "json",
                data: {
                    rowId,
                    qty,
                    price,
                },
                success: function (result) {
                    subtitle.html(result.subtitle + " VNĐ");
                    $(".total-price").html(result.total + "VNĐ");
                },
            });
        });
    },
    handleChangeQtyInput: () => {
        $(".quantity-left-minus").click(function () {
            let input = $("input.input-number");
            let qty = input.val();
            if (qty > 1) {
                input.val(Number(qty - 1));
            }
        });
        $(".quantity-right-plus").click(function () {
            let input = $("input.input-number");
            let qty = input.val();
            if (qty < 100) {
                input.val(Number(qty) + 1);
            }
        });
    },
    handleFilterProducts(filter) {
        let url = $("#filter").data("url");
        $.ajax({
            url: url,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            type: "POST",
            dataType: "json",
            data: {
                filter,
            },
            success: function (result) {
                console.log(123);
            },
        });
    },
    handleChangeOrderBy() {
        $("#filter-orderby").change(function () {
            let data = $(this).val();
            app.handleFilterProducts(data);
        });
    },
};

$(document).ready(function () {
    app.chageQtyCartAjax();
    app.handleChangeQtyInput();
    app.handleChangeOrderBy();
});
