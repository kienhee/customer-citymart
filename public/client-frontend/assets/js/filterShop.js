function addFillter(param, value) {
    // Lấy URL hiện tại
    let currentUrl = window.location.href;

    // Tham số mới mà bạn muốn thêm hoặc thay thế
    let newParam = `${param}=${value}`;

    // Regex để kiểm tra xem tham số đã tồn tại trong URL chưa
    let regex = new RegExp(
        "([?&])" + newParam.split("=")[0] + "=.*?(&|$)",
        "i"
    );

    // Nếu tham số đã tồn tại, thì thay thế giá trị của nó
    let newUrl = "";
    if (currentUrl.match(regex)) {
        newUrl = currentUrl.replace(regex, "$1" + newParam + "$2");
    } else {
        // Nếu tham số chưa tồn tại, thêm nó vào URL
        newUrl =
            currentUrl +
            (currentUrl.indexOf("?") !== -1 ? "&" : "?") +
            newParam;
    }

    // Chuyển hướng tới URL mới
    window.location.href = newUrl;
}

function removeFilter(param) {
    // Lấy URL hiện tại
    let currentUrl = window.location.href;

    // Tham số mà bạn muốn xoá
    let paramToRemove = param;

    // Regex để tìm và xoá tham số từ query string
    let regex = new RegExp("([?&])" + paramToRemove + "=.*?(&|$)", "i");

    // Xoá tham số từ URL
    let newUrl = currentUrl.replace(regex, "$1").replace(/&$/, "");

    // Chuyển hướng tới URL mới
    window.location.href = newUrl;
}
$("#sortBy2").change(function () {
    let filter = $(this).val();
    if (filter != "all") {
        addFillter("filter", filter);
    }
    // Thực hiện các hành động khác dựa trên giá trị đã chọn
});
