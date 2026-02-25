


document.addEventListener("alpine:init", () => {
    Alpine.data("restaurants", () => ({

        showFilter: false,
        filter: null,

        init() {
            console.log('restaurant init.');
        },

        toggleFilter(name) {

            if (!this.filter || this.filter != name) {
                this.filter = name;
            }
            else {
                this.filter = null;
            }
        },


    }));


});
