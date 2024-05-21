document.addEventListener("DOMContentLoaded", () => {
    const dialogHandler = (open, close, dialog) => {
        const openDialog = document.getElementById(open)
        const closeDialog = document.getElementById(close)
        const elementDialog = document.getElementById(dialog)

        openDialog.addEventListener("click", (evt) => {
            evt.preventDefault()
            console.log("openDialog clicado");
            elementDialog.showModal()
        })

        closeDialog.addEventListener("click", (evt) => {
            evt.preventDefault()
            elementDialog.close()
        })
    }

    dialogHandler("insert-product", "cancel-insert-product", "insert-product-dialog")
})