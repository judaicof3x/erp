"use strict";
var KTModalUpdateCustomer = function () {
    var t, e, n, o, c, r;
    return {
        init: function () {
            t = document.querySelector("#kt_modal_update_customer"), r = new bootstrap.Modal(t), c = t.querySelector("#kt_modal_update_customer_form"), e = c.querySelector("#kt_modal_update_customer_submit"), n = c.querySelector("#kt_modal_update_customer_cancel"), o = t.querySelector("#kt_modal_update_customer_close"), e.addEventListener("click", (function (t) {
                t.preventDefault(), e.setAttribute("data-kt-indicator", "on"), setTimeout((function () {
                    e.removeAttribute("data-kt-indicator"), Swal.fire({
                        text: "Cliente editado com sucesso!",
                        icon: "success",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, voltar!",
                        customClass: {confirmButton: "btn btn-primary"}
                    }).then((function (t) {
                        t.isConfirmed && r.hide()
                    }))
                    document.getElementById("kt_modal_update_customer_form").submit();
                }), 2e3)
            })), n.addEventListener("click", (function (t) {
                t.preventDefault(), Swal.fire({
                    text: "Tem certeza que deseja cancelar?",
                    icon: "warning",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: "Sim, cancelar!",
                    cancelButtonText: "Não, voltar",
                    customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light"}
                }).then((function (t) {
                    t.value ? (c.reset(), r.hide()) : "cancel" === t.dismiss && Swal.fire({
                        text: "A edição não foi cancelada!.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, continuar editando!",
                        customClass: {confirmButton: "btn btn-primary"}
                    })
                }))
            })), o.addEventListener("click", (function (t) {
                t.preventDefault(), Swal.fire({
                    text: "Tem certeza que deseja cancelar?",
                    icon: "warning",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: "Sim, cancelar!",
                    cancelButtonText: "Não, voltar",
                    customClass: {confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light"}
                }).then((function (t) {
                    t.value ? (c.reset(), r.hide()) : "cancel" === t.dismiss && Swal.fire({
                        text: "A edição foi cancelada!.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, voltar!",
                        customClass: {confirmButton: "btn btn-primary"}
                    })
                }))
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTModalUpdateCustomer.init()
}));
