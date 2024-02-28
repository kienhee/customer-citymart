/**
 * Trang xác thực
 */

"use strict";
const formAuthentication = document.querySelector("#formAuthentication");

document.addEventListener("DOMContentLoaded", function (e) {
    (function () {
        // Kiểm tra hợp lệ cho Thêm bản ghi mới
        if (formAuthentication) {
            const fv = FormValidation.formValidation(formAuthentication, {
                fields: {
                    username: {
                        validators: {
                            notEmpty: {
                                message: "Vui lòng nhập tên người dùng",
                            },
                            stringLength: {
                                min: 6,
                                message: "Tên người dùng phải hơn 6 ký tự",
                            },
                        },
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: "Vui lòng nhập email của bạn",
                            },
                            emailAddress: {
                                message: "Vui lòng nhập địa chỉ email hợp lệ",
                            },
                        },
                    },
                    "email-username": {
                        validators: {
                            notEmpty: {
                                message: "Vui lòng nhập email / tên người dùng",
                            },
                            stringLength: {
                                min: 6,
                                message: "Tên người dùng phải hơn 6 ký tự",
                            },
                        },
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: "Vui lòng nhập mật khẩu của bạn",
                            },
                            stringLength: {
                                min: 6,
                                message: "Mật khẩu phải hơn 6 ký tự",
                            },
                        },
                    },
                    "confirm-password": {
                        validators: {
                            notEmpty: {
                                message: "Vui lòng xác nhận mật khẩu",
                            },
                            identical: {
                                compare: function () {
                                    return formAuthentication.querySelector(
                                        '[name="password"]'
                                    ).value;
                                },
                                message:
                                    "Mật khẩu và xác nhận mật khẩu không giống nhau",
                            },
                            stringLength: {
                                min: 6,
                                message: "Mật khẩu phải hơn 6 ký tự",
                            },
                        },
                    },
                    terms: {
                        validators: {
                            notEmpty: {
                                message:
                                    "Vui lòng đồng ý với điều khoản & điều kiện",
                            },
                        },
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap5: new FormValidation.plugins.Bootstrap5({
                        eleValidClass: "",
                        rowSelector: ".mb-3",
                    }),
                    submitButton: new FormValidation.plugins.SubmitButton(),

                    defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
                    autoFocus: new FormValidation.plugins.AutoFocus(),
                },
                init: (instance) => {
                    instance.on("plugins.message.placed", function (e) {
                        if (
                            e.element.parentElement.classList.contains(
                                "input-group"
                            )
                        ) {
                            e.element.parentElement.insertAdjacentElement(
                                "afterend",
                                e.messageElement
                            );
                        }
                    });
                },
            });
        }

        // Xác minh hai bước
        const numeralMask = document.querySelectorAll(".numeral-mask");

        // Mặt nạ xác minh
        if (numeralMask.length) {
            numeralMask.forEach((e) => {
                new Cleave(e, {
                    numeral: true,
                });
            });
        }
    })();
});
