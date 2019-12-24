// ajax-thêm danh mục sản phẩm
    $(document).ready(function() {
        $("#btnAddPortfolio").click(function() {
            var s = "s";
            $.ajax({
                url    : "{{ route(admin-add-portfolio) }}",
                type : "POST",
                data   : {s:s},//hello ok
                dataType: "json",
                success: function(result){
                    $('#FunctionPortfolio').html(result);
                },
            });
        });
    });
