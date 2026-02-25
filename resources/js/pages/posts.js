


document.addEventListener("alpine:init", () => {
    Alpine.data("posts", () => ({

        showFilter: false,
        filter: null,

        init() {
            console.log('posts init.');
        },

        toggleFilter(name) {

            if (!this.filter || this.filter != name) {
                this.filter = name;
            }
            else {
                this.filter = null;
            }
        },

        showPost(postId) {
            toastr.info(`Loading post...`, { timeOut: 0 } );
            axios.get(route('posts.show', postId)).then((response) => {
                this.$store.postView.post = response.data;
                this.$store.postView.show();
                toastr.clear();
            });
        },


    }));


});
