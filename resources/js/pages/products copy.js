


document.addEventListener("alpine:init", () => {
    Alpine.data("categories", () => ({

        showFilter: false,
        filter: null,

        init() {
            console.log('categories init.');
        },


    }));


});
