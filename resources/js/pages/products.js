


document.addEventListener("alpine:init", () => {
    Alpine.data("products", () => ({

        showFilter: false,
        filter: null,

        init() {
            console.log('products init.');
        },


    }));


});
