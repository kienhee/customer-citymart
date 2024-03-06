$("#addTocart").on("click", function () {
    let product_id = $('input[name="product_id"]').val();
    let color = $('input[name="color"]:checked').val();
    let size = $('input[name="size"]:checked').val();
    let quantity = parseInt($(".qnttinput").val());
    ajaxAddCart(product_id, quantity, color, size);
});
$(".cart__btn button").on("click", function () {
    let product_id = $(this).closest("div").find(".product_id-hidden").val();
    let color = $(this).closest("div").find(".color-hidden").val();
    let size = $(this).closest("div").find(".size-hidden").val();
    let quantity = 1;
    ajaxAddCart(product_id, quantity, color, size);
});
function ajaxAddCart(product_id, quantity, color, size) {
    $.ajax({
        type: "POST",
        url: "/add-to-cart",
        data: {
            _token: $('meta[name="csrf-token"]').attr("content"),
            product_id,
            quantity,
            color,
            size,
        },
        dataType: "json",
        success: function (response) {
            Swal.fire({
                title: response.title,
                text: response.message,
                icon: "success",
            });
            getCart();
        },
        error: function (err) {
            Swal.fire({
                title: err.responseJSON.title,
                text: err.responseJSON.message,
                icon: "error",
            });
        },
    });
}
function getCart() {
    $.ajax({
        type: "GET",
        url: "/get-cart",
        success: function (response) {
            if (response) {
                // Xóa các mục trong #cart__items trước khi thêm mục mới
                $("#cart__items").empty();
                // Lặp qua mỗi mục trong dữ liệu trả về
                $("#lengthCart").text(response.length);
                let subtotal = calculateSubtotal(response);
                $("#cart__subtotal").text(`${subtotal} Kr`);
                response.forEach(function (item) {
                    // Tạo HTML cho mỗi mục
                    let html = `
                    <div class="shopping-card">
                        <a href="#" class="shopping-card__image">
                            <img src="${
                                item.images.split(",")[0]
                            }" alt="cart-product" />
                        </a>
                        <div class="shopping-card__content">
                            <div class="shopping-card__content-top">
                                <h5 class="product__title">
                                    <a href="/shop/${item.slug}">${
                        item.name
                    } </a>
                                </h5>
                                <h5 class="product__price">${
                                    item.discount > 0
                                        ? item.price * (1 - item.discount / 100)
                                        : item.price
                                } Kr</h5>
                            </div>
                            <div class="mb-2" >     
                             ${
                                 item.size
                                     ? `<p class="mb-0" style="font-size:14px"><small class="text-muted">Type: 
                                           ${item.size}
                                         </small></p> `
                                     : ""
                             }
                                    ${
                                        item.color
                                            ? `<p class="mb-0" style="font-size:14px"><small class="text-muted ">Color: 
                                           ${item.color.split("-")[0]}
                                         </small></p>`
                                            : ""
                                    }</div>
                       
                            <div class="shopping-card__content-bottom">
                                <div class="quantity__wrapper">
                                    <div class="quantity">
                                        <button type="button" class="decressQnt">
                                            <span class="bar"></span>
                                        </button>
                                         <input type="hidden" class="uuid" value="${
                                             item.uuid
                                         }">
                                        <input class="qnttinput" type="number" disabled value="${
                                            item.quantity
                                        }" min="01" max="100" />
                                        <button type="button" class="incressQnt">
                                            <span class="bar"></span>
                                        </button>
                                    </div>
                                   
                                         
                                </div>
                                <button type="button" class="action__btn" onclick="deleteItem('${
                                    item.uuid
                                }')">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.25 3.5H2.75M2.75 3.5H14.75M2.75 3.5V14C2.75 14.3978 2.90804 14.7794 3.18934 15.0607C3.47064 15.342 3.85218 15.5 4.25 15.5H11.75C12.1478 15.5 12.5294 15.342 12.8107 15.0607C13.092 14.7794 13.25 14.3978 13.25 14V3.5H2.75ZM5 3.5V2C5 1.60218 5.15804 1.22064 5.43934 0.93934C5.72064 0.658035 6.10218 0.5 6.5 0.5H9.5C9.89782 0.5 10.2794 0.658035 10.5607 0.93934C10.842 1.22064 11 1.60218 11 2V3.5M6.5 7.25V11.75M9.5 7.25V11.75" stroke="#667085" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span>Delete</span>
                                </button>
                            </div>
                        </div>
                    </div>
                `;
                    // Thêm HTML vào #cart__items
                    $("#cart__items").append(html);
                });
                $(".incressQnt").on("click", function () {
                    let $qty = $(this).closest("div").find(".qnttinput");
                    let uuid = $(this).closest("div").find(".uuid").val();
                    let currentVal = parseInt($qty.val(), 10);
                    if (!isNaN(currentVal)) {
                        $qty.val(currentVal + 1);
                    }
                    handleActionsCart(uuid, "incressQnt");
                });
                $(".decressQnt").on("click", function () {
                    let $qty = $(this).closest("div").find(".qnttinput");
                    let currentVal = parseInt($qty.val(), 10);
                    let uuid = $(this).closest("div").find(".uuid").val();
                    if (!isNaN(currentVal) && currentVal > 1) {
                        $qty.val(currentVal - 1);
                    } else {
                        $(this)
                            .parents(".cart__action__btn")
                            .find(".cart__quantity")
                            .css("display", "none");
                    }
                    if (currentVal > 1) {
                        handleActionsCart(uuid, "decressQnt");
                    }
                });
            }
        },
    });
}
getCart();

function handleActionsCart(uuid, action) {
    $.ajax({
        url: "/handle-actions-cart",
        type: "POST",
        data: {
            _token: $('meta[name="csrf-token"]').attr("content"),
            uuid,
            action,
        },
        success: function (response) {
            // Xử lý phản hồi từ máy chủ nếu cần
            // console.log(response);
            let subtotal = calculateSubtotal(response.data);
            $("#cart__subtotal").text(`${subtotal} Kr`);
        },
        error: function (xhr) {
            // Xử lý lỗi nếu có
            // console.log(xhr);
        },
    });
}

function deleteItem(uuid) {
    $.ajax({
        url: "/handle-actions-cart",
        type: "POST",
        data: {
            _token: $('meta[name="csrf-token"]').attr("content"),
            uuid,
            action: "delete",
        },
        success: function (response) {
            getCart();
        },
        error: function (err) {
            Swal.fire({
                title: err.responseJSON.title,
                text: err.responseJSON.message,
                icon: "error",
            });
        },
    });
}
// Hàm tính tổng giá tiền của một sản phẩm
function calculateTotalPrice(product) {
    var price = parseFloat(product.price);
    var quantity = parseInt(product.quantity);
    var discount = product.discount ? parseFloat(product.discount) / 100 : 0;
    var totalPrice = price * (1 - discount) * quantity;
    return totalPrice;
}

// Tính tổng subtotal của tất cả các sản phẩm
function calculateSubtotal(products) {
    var subtotal = 0;
    for (var i = 0; i < products.length; i++) {
        subtotal += calculateTotalPrice(products[i]);
    }
    return subtotal;
}
